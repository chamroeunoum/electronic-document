<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Mail\MobilePasswordResetRequest;
use Illuminate\Support\Facades\Mail;
use App\User as RecordModel ;
use App\Http\Controllers\CrudController;


class UserController extends Controller
{
    private $selectFields = [
        'id',
        'firstname' ,
        'lastname' ,
        'email',
        'username' ,
        'phone' ,
        'active' ,
        'people_id'
    ];
    /**
     * Listing function
     */
    public function index(Request $request){
        /** Format from query string */
        $search = isset( $request->search ) && $request->serach !== "" ? $request->search : false ;
        $perPage = isset( $request->perPage ) && $request->perPage !== "" ? $request->perPage : 10 ;
        $page = isset( $request->page ) && $request->page !== "" ? $request->page : 1 ;

        $queryString = [
            // "where" => [
            //     'default' => [
            //         [
            //             'field' => 'type_id' ,
            //             'value' => $type === false ? "" : $type
            //         ]
            //     ],
            //     'in' => [] ,
            //     'not' => [] ,
            //     'like' => [
            //         [
            //             'field' => 'number' ,
            //             'value' => $number === false ? "" : $number
            //         ],
            //         [
            //             'field' => 'year' ,
            //             'value' => $date === false ? "" : $date
            //         ]
            //     ] ,
            // ] ,
            // "pivots" => [
            //     $unit ?
            //     [
            //         "relationship" => 'units',
            //         "where" => [
            //             "in" => [
            //                 "field" => "id",
            //                 "value" => [$request->unit]
            //             ],
            //         // "not"=> [
            //         //     [
            //         //         "field" => 'fieldName' ,
            //         //         "value"=> 'value'
            //         //     ]
            //         // ],
            //         // "like"=>  [
            //         //     [
            //         //        "field"=> 'fieldName' ,
            //         //        "value"=> 'value'
            //         //     ]
            //         // ]
            //         ]
            //     ]
            //     : []
            // ],
            "pagination" => [
                'perPage' => $perPage,
                'page' => $page
            ],
            "search" => $search === false ? [] : [
                'value' => $search ,
                'fields' => [
                    'name', 'email', 'username' , 'phone' ,
                ]
            ],
            "order" => [
                'field' => 'id' ,
                'by' => 'desc'
            ],
        ];

        $request->merge( $queryString );

        $crud = new CrudController(new RecordModel(), $request, $this->selectFields);
        $crud->setRelationshipFunctions([
            /** relationship name => [ array of fields name to be selected ] */
            "person" => ['id','firstname' , 'lastname' , 'gender' , 'dob' , 'pob' , 'picture' ] 
        ]);

        $builder = $crud->getListBuilder()->whereNull('deleted_at');

        $responseData = $crud->pagination(true, $builder);
        $responseData['message'] = __("crud.read.success");
        $responseData['ok'] = true ;
        return response()->json($responseData, 200);
    }
    /**
     * Create an account
     */
    public function store(Request $request){
        $user = \App\User::where('email',$request->email)->first() ;
        if( $user ){
            // ?????????????????????????????????????????????????????????????????????????????????????????????????????????
            return response([
                'user' => $user ,
                'message' => '???????????? '.$user->name.' ?????????????????????????????????????????????????????????????????? ???' . (
                    $user->active ? " ????????????????????????????????????????????????????????????????????????????????? !" : " ???????????????????????????????????????????????????????????????????????? !"
                )],201
            );
        }else{
            // ?????????????????????????????????????????? ???????????????????????????????????????????????????
            $user = new \App\User([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'active' => $request->active == true || $request->active == 1 ? 1 : 0 ,
                'password' => bcrypt($request->password)
            ]);
            $user->save();
            if( $user ){
                
                return response()->json([
                    'user' => \App\User::find( $user->id ) ,
                    'message' => '????????????????????????????????????????????????????????? !'
                ], 200);

            }else {
                return response()->json([
                    'user' => null ,
                    'message' => '???????????????????????????????????????????????????????????????????????? !'
                ], 201);
            }
        }
    }
    /**
     * Create an account
     */
    public function update(Request $request){
        $user = isset( $request->id ) && $request->id > 0 ? \App\User::find($request->id) : (
            isset( $request->email ) && $request->email != "" ? \App\User::where('email',$request->email)->first() : null
        );
        if( $user ){
            // ?????????????????????????????????????????? ???????????????????????????????????????????????????
            $user->firstname = $request->firstname ;
            $user->lastname = $request->lastname;
            $user->email = $request->email ;
            $user->active = $request->active == true || $request->active == 1 ? 1 : 0 ;
            $user->save();    
            return response()->json([
                'user' => $user ,
                'message' => '???????????????????????????????????????????????????????????? !' ,
                'ok' => true
            ], 200);
        }else{
            // ????????????????????????????????????????????????????????????
            return response([
                'user' => null ,
                'message' => '????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????' ,
                'ok' => false
                ], 201);
        }
    }
    /**
     * Active function of the account
     */
    public function active(Request $request){
        $user = \App\User::find($request->id) ;
        if( $user ){
            $user->active = $request->active ;
            $user->save();
            // User does exists
            return response([
                'user' => $user ,
                'ok' => true ,
                'message' => '???????????? '.$user->name.' ????????????????????????????????????????????? !' 
                ],
                200
            );
        }else{
            // User does not exists
            return response([
                'user' => null ,
                'ok' => false ,
                'message' => '?????????????????? ????????????????????????????????????????????? !' 
                ],
                201
            );
        }
    }
    /**
     * Unactive function of the account
     */
    public function unactive(Request $request){
        $user = \App\User::find($request->id) ;
        if( $user ){
            $user->active = 0 ;
            $user->save();
            // User does exists
            return response([
                'ok' => true ,
                'user' => $user ,
                'message' => '???????????? '.$user->name.' ????????????????????????????????????????????? !' 
                ],
                200
            );
        }else{
            // User does not exists
            return response([
                'user' => null ,
                'ok' => false ,
                'message' => '?????????????????? ????????????????????????????????????????????? !' ],
                201
            );
        }
    }
    /**
     * Function delete an account
     */
    public function destroy(Request $request){
        $user = \App\User::find($request->id) ;
        if( $user ){
            $user->active = 0 ;
            $user->deleted_at = \Carbon\Carbon::now() ;
            $user->save();
            // User does exists
            return response([
                'ok' => true ,
                'user' => $user ,
                'message' => '???????????? '.$user->name.' ????????????????????????????????????????????? !' ,
                'ok' => true 
                ],
                200
            );
        }else{
            // User does not exists
            return response([
                'ok' => false ,
                'user' => null ,
                'message' => '?????????????????? ????????????????????????????????????????????? !' ],
                201
            );
        }
    }
    /**
     * Function Restore an account from SoftDeletes
     */
    public function restore(Request $request){
        if( $user = \App\User::restore($request->id) ){
            return response([
                'user' => $user ,
                'ok' => true ,
                'message' => '???????????? '.$user->name.' ??????????????????????????????????????????????????????????????????????????? !'
                ],200
            );
        }
        return response([
                'user' => null ,
                'ok' => false ,
                'message' => '???????????????????????????????????????????????? !'
            ],201
        );
    }

    public function forgotPassword(Request $request){
        if( $request->email != "" ){
            $user = \App\User::where('email',$request->email )->first();
            if ($user) {
                $user -> forgot_password_token = Str::random(60) ;
                $user -> update();
                
                Mail::to($request->email)
                    ->send( new MobilePasswordResetRequest($user) );

                return response()->json([
                    'record' => $user ,
                    'ok' => true ,
                    'message' => '????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????? ?????????????????????????????????????????? ????????????????????? ! ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? !'
                ], 200);
            }else{
                return response()->json([
                    'ok' => false ,
                    'message' => '???????????????????????????????????????????????????????????????????????????????????????????????? !'
                ], 404);
            }
        }
        return response()->json([
            'ok' => false ,
            'message' => '?????????????????????????????????????????? ?????????????????????????????????????????? !'
        ], 422);
    }
    public function checkConfirmationCode(Request $request){
        if( $request->email != "" && $request->code != "" ){
            $user = \App\User::where( 'email',$request->email )->where('forgot_password_token', $request->code )->first();
            return $user ;
            if ($user) {
                $user -> forgot_password_token = '' ;
                $user -> update();
                return response()->json([
                    'record' => $user ,
                    'ok' => true ,
                    'message' => '?????????????????????????????? ????????????????????????????????????????????????????????? ! ??????????????????????????? ???????????????????????????????????????????????? ???????????????????????? !'
                ], 200);
            }else{
                return response()->json([
                    'ok' => false ,
                    'message' => '??????????????????????????????????????????????????????????????????????????????????????????????????? !'
                ], 404);
            }
        }
        return response()->json([
            'ok' => false ,
            'message' => '?????????????????????????????????????????? ?????????????????? ??? ??????????????????????????????????????????????????????????????? ???????????????????????? !'
        ], 422);
    }
    public function passwordReset(Request $request){
        
        $record = \App\User::where('email',$request->email)->first();
        if( $record ){
            $record->password = Hash::make($request->password);
            $record->update();
            return response([
                'record' => $record ,
                'ok' => true ,
                'message' => '???????????????????????????????????????????????????????????????????????????????????????????????????????????? !'
            ],200);
        }else{
            return response([
                'record' => null ,
                'ok' => false ,
                'message' => '???????????????????????? ?????????????????? ??????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????? !'
            ],201);
        }
        // 'password' => bcrypt($request->password),
    }
    public function passwordChange(Request $request){
        $record = \App\User::find($request->id);
        if( $record ){
            $record->password = Hash::make($request->password);
            $record->update();
            return response([
                'record' => $record ,
                'ok' => true ,
                'message' => '???????????????????????????????????????????????????????????????????????????????????????????????????????????? !'
            ],200);
        }else{
            return response([
                'record' => null ,
                'ok' => false ,
                'message' => '???????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? !'
            ],201);
        }
    }
}
