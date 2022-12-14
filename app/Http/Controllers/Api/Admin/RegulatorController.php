<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document as RecordModel;
use App\Http\Controllers\CrudController;


class RegulatorController extends Controller
{
    private $selectFields = [
        'id',
        'fid' ,
        'title' ,
        'objective',
        'document_year' ,
        'pdf' ,
        'document_type' ,
        'publish'
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
            "where" => [
                // 'default' => [
                //     [
                //         'field' => 'publish' ,
                //         'value' => 0
                //     ]
                // ],
                // 'in' => [
                //     [
                //         'field' => 'document_type' ,
                //         'value' => isset( $request->document_type ) && $request->document_type !== null ? [$request->document_type] : false
                //     ]
                // ] ,
                // 'not' => [
                //     [
                //         'field' => 'document_type' ,
                //         'value' => [4]
                //     ]
                // ] ,
                // 'like' => [
                //     [
                //         'field' => 'number' ,
                //         'value' => $number === false ? "" : $number
                //     ],
                //     [
                //         'field' => 'year' ,
                //         'value' => $date === false ? "" : $date
                //     ]
                // ] ,
            ] ,
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
                    'objective', 'fid', 'document_year'
                ]
            ],
            "order" => [
                'field' => 'id' ,
                'by' => 'desc'
            ],
        ];
        if( isset( $request->document_type ) ) {
            $queryString['where']['default'] = [
                'in' => [
                    [
                        'field' => 'document_type' ,
                        'value' =>  $request->document_type
                    ]
                ]
            ];
        }

        $request->merge( $queryString );

        $crud = new CrudController(new RecordModel(), $request, $this->selectFields);
        $crud->setRelationshipFunctions([
            /** relationship name => [ array of fields name to be selected ] */
            "type" => ['id', 'name', 'format', 'color', 'index'] ,
            "ministries" => ['id', 'name'] ,
            'parentDocument' => [ 'id' ,'parent_id','amend' ]
        ]);

        $builder = $crud->getListBuilder();

        $responseData = $crud->pagination(true, $builder,[
                'pdf' => function($pdf){
                    $pdf = ( $pdf !== "" && \Storage::disk('document')->exists( $pdf ) )
                    ? true
                    // \Storage::disk('document')->url( $pdf ) 
                    : false ;
                    return $pdf ;
                },
                'objective' => function($objective){
                    return html_entity_decode( strip_tags( $objective ) );
                }
            ]
        );
        $responseData['message'] = __("crud.read.success");
        $responseData['ok'] = true ;
        return response()->json($responseData, 200);
    }
    /**
     * Listing function
     */
    public function child(Request $request){
        /** Format from query string */
        $search = isset( $request->search ) && $request->serach !== "" ? $request->search : false ;
        $perPage = isset( $request->perPage ) && $request->perPage !== "" ? $request->perPage : 10 ;
        $page = isset( $request->page ) && $request->page !== "" ? $request->page : 1 ;

        $queryString = [
            "where" => [
                // 'default' => [
                //     [
                //         'field' => 'publish' ,
                //         'value' => 0
                //     ]
                // ],
                // 'in' => [
                //     [
                //         'field' => 'document_type' ,
                //         'value' => isset( $request->document_type ) && $request->document_type !== null ? [$request->document_type] : false
                //     ]
                // ] ,
                'not' => [
                    [
                        'field' => 'id' ,
                        'value' => [ $request->parent_id ]
                    ]
                ] // ,
                // 'like' => [
                //     [
                //         'field' => 'number' ,
                //         'value' => $number === false ? "" : $number
                //     ],
                //     [
                //         'field' => 'year' ,
                //         'value' => $date === false ? "" : $date
                //     ]
                // ] ,
            ] ,
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
                    'objective', 'fid', 'document_year'
                ]
            ],
            "order" => [
                'field' => 'id' ,
                'by' => 'desc'
            ],
        ];
        if( isset( $request->document_type ) ) {
            $queryString['where']['default'] = [
                'in' => [
                    [
                        'field' => 'document_type' ,
                        'value' =>  $request->document_type
                    ]
                ]
            ];
        }

        $request->merge( $queryString );

        $crud = new CrudController(new RecordModel(), $request, $this->selectFields);
        $crud->setRelationshipFunctions([
            /** relationship name => [ array of fields name to be selected ] */
            "type" => ['id', 'name', 'format', 'color', 'index'] ,
            "ministries" => ['id', 'name'] ,
            'parentDocument' => [ 'id' ,'parent_id', 'document_id', 'amend' ]
        ]);

        $builder = $crud->getListBuilder();

        $responseData = $crud->pagination(true, $builder,[
                'pdf' => function($pdf){
                    $pdf = ( $pdf !== "" && \Storage::disk('document')->exists( $pdf ) )
                    ? true
                    // \Storage::disk('document')->url( $pdf ) 
                    : false ;
                    return $pdf ;
                },
                'objective' => function($objective){
                    return html_entity_decode( strip_tags( $objective ) );
                }
            ]
        );
        $responseData['message'] = __("crud.read.success");
        $responseData['ok'] = true ;
        return response()->json($responseData, 200);
    }
    /**
     * Listing document by its type within a specific ministry
     */
    public function byTypeWithinMinistry($id){

        // Create Query Builder 
        $documentIds = \App\Models\DocumentMinistry::where('ministry_id',$id)->first()->getDocuments();
        $queryBuilder = new Document();

        // Get search string
        if( $request->search != "" ){
            $searchTerms = explode(' ' , $request->search) ;
            if( is_array( $searchTerms ) && !empty( $searchTerms ) ){
                $queryBuilder = $queryBuilder -> where( function ($query ) use ( $searchTerms ) {
                    foreach( $searchTerms as $term ) {
                        $query = $query -> orwhere ( 'objective', 'LIKE' , "%".$term."%") ;
                    }
                } );
            }
        }
        // Get document type
        if( $request->document_type != "" ){
            $documentTypes = explode(',', $request->document_type );
            if( is_array( $documentTypes ) && !empty( $documentTypes ) ){
                $queryBuilder = $queryBuilder -> where( function ($query ) use ( $documentTypes ) {
                    foreach( $documentTypes as $type ) {
                        $query = $query -> orwhere ( 'document_type', $type ) ;
                    }
                } );
            }
        }
        // Get document year
        if( $request->document_year != "" ){
            $queryBuilder = $queryBuilder -> where('document_year','LIKE','%'.$request->document_year.'%');
        }
        // Get document registration id
        if( $request -> fid != "" ){
            $queryBuilder = $queryBuilder -> where('fid','LIKE','%'.$request -> fid);
        }

        $queryBuilder = $queryBuilder -> whereIn('id',$documentIds);
        // return $queryBuilder -> toSql();

        // $perpage = 
        return response([
            'records' => $queryBuilder->orderby('id','desc')->get()
                ->map( function ($record, $index) {
                    $record->objective = strip_tags( $record->objective ) ;
                    return $record ;
                })
            ,
            'message' => '?????????????????????????????????????????????????????????????????????????????? !' 
        ],200 );
    }
    /**
     * View the pdf file
     */
    public function pdf(Request $request)
    {
        $document = Document::findOrFail($request->id);
        if($document) {
            $path = storage_path('data') . '/' . $document->pdf;
            $ext = pathinfo($path);
            $filename = str_replace('/' , '-', $document->fid) . "." . $ext['extension'];
            
            /**   Log the access of the user */
            //   $user_id= Auth::user()->id;
            //   $current_date = date('Y-m-d H:i:s');
            //   DB::insert('insert into document_view_logs (user_id, document_id, date) values (?,?,?)', [$user_id, $id, $current_date]);

            if(is_file($path)) {
                $pdfBase64 = base64_encode( file_get_contents($path) );
                return response([
                    "pdf" => 'data:application/pdf;base64,' . $pdfBase64 ,
                    "filename" => $filename
                ],200);
            }else
            {
                return response([
                    'message' => '????????????????????????????????????????????????????????????????????????????????? !' ,
                    'path' => $path
                ],404 );
            }
        }
    }
    /** Get the year(s) that there is/are documents published base on ministry_id and document_type_id */
    public function getDocumentsAsMinistryTypeYearMonth(Request $request){
        $ministries = \App\Models\Ministry()->selectRaw('id, name')->orderby('name','asc')->get();
        // $tree = []
        // foreach( $ministries as $ministryIndex => $ministry ){
            
        //     foreach( $ministry->documents as $documentIndex => $document ){

        //     }
        // }    
    }
    public function create(Request $request){
        /**
         * Save information of the regulator and its related information
         */
        
        RecordModel::create([
            'fid' => $request->number ,
            'title' => $request->title ,
            'objective' => $request->objective ,
            'document_year' => $request->year ,
            'document_type' => $request->type_id ,
            'publish' => $request->publish
        ]);
        /**
         * Upload pdf document(s) of the regulator
         */
    }
    public function update(Request $request){

    }
    public function read(Request $request){
        if( !isset( $request->id ) || $request->id < 0 ){
            return response()->json([
                'ok' => false ,
                'message' => '??????????????????????????????????????????????????????????????????????????????????????????'
            ],201);
        }
        $regulator = RecordModel::find($request->id);
        if( $regulator == null ){
            return response()->json([
                'ok' => false ,
                'message' => '??????????????????????????????????????????????????????????????????????????????????????????'
            ],201);
        }
        $regulator->with('ministries')->with('signatures')->with('ministries')->with('type');
        return response()->json([
            'record' => $regulator ,
            'ok' => true ,
            'message' => '??????????????????????????????????????????????????????????????????????????????????????????'
        ],201);
    }
    public function destroy(Request $request){
        if( !isset( $request->id ) || $request->id < 0 ){
            return response()->json([
                'ok' => false ,
                'message' => '??????????????????????????????????????????????????????????????????????????????????????????'
            ],201);
        }
        $regulator = RecordModel::find($request->id);
        if( $regulator == null ){
            return response()->json([
                'ok' => false ,
                'message' => '??????????????????????????????????????????????????????????????????'
            ],201);
        }
        $regulator->with('ministries')->with('signatures')->with('ministries')->with('type');
        $tempRecord = $regulator;
        if( $regulator->delete() ){
            /**
             * Delete all the related documents own by this regulator
             */
            
            return response()->json([
                'record' => $tempRecord ,
                'ok' => true ,
                'message' => '??????????????????????????????????????????????????????'
            ],200);
        }
        return response()->json([
            'record' => $tempRecord ,
            'ok' => false ,
            'message' => '?????????????????????????????????????????????????????????????????????????????????'
        ],201);
    }
    public function childDocument(Request $request){
        /**
         * Check whether the provided parent has already created.
         * If then, we will just update the child
         */
        // In this case, we ignore and fire a message back to client
        $parentDocument = null ;
        /**
         * In case, a match of parent and child does not exist
         */
        if( \App\Models\DocumentParent::where('parent_id',$request->parent_id)->first() !== null ){
            if( \App\Models\DocumentParent::where('parent_id',$request->parent_id)->where('document_id',$request->document_id)->first() == null ){
                /**
                 * Create new record
                 */
                $parentDocument = \App\Models\DocumentParent::create([
                    'document_id' => $request->document_id ,
                    'parent_id' => $request->parent_id ,
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s') ,
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ]);   
            }
            else{

            }
        }else if( ( $parentDocument = \App\Models\DocumentParent::where('parent_id',$request->parent_id)->first() ) ) {
            
        }
        
        $parentDocument->document;
        $parentDocument->parentDocument;
        return response()->json([
            'record' => $parentDocument ,
            'ok' => true ,
            'message' => '??????????????????????????????????????????????????????'
        ],200);
    }
    public function oknha(Request $request){
        $records = \App\Models\Document::select(['id','fid','objective','document_year'])->where('objective','LIKE','%???????????????%')
        // ->orWhere('fid','LIKE','%???????????????????????????%')
        ->whereNot('objective',"LIKE",'%???????????????????????????%')
        ->whereNotIn('id',[51567, 20014, 19451, 45672, 45673, 45684, 45688, 45693, 45697, 45705, 45716, 45717, 51794, 51453,  45723, 45724, 50355, 45761, 45764, 58693, 56440, 58908, 58458, 57730, 57705, 57692, 57677, 57073, 56265, 56148, 56084, 55414, 54445, 53835, 52968, 52965, 52049, 52036, 52034, 51409, 51408, 51407, 50318, 49856, 49601, 49564, 48893, 46788, 46760 ])
        ->get()->map(function($r){
            $r->objective = trim( str_replace( [ '??????????????????????????????????????????????????????????????????????????????????????????' ,'?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????' , '?????????????????????????????????????????????????????????????????????????????????' , '????????????????????????????????????????????????????????????????????????????????????????????????????????????' , '????????????????????????????????????' , '&nbsp;' , '?????????????????????????????????' , '?????????????????????????????????????????????????????????????????????????????????????????????????????????', '??????????????????????????????????????????????????????????????????????????????????????????????????????' , '??????????????????????????????????????????????????????????????????????????????????????????????????????' , '????????????????????????????????????' , '??????????????????????????????????????????' , '?????????????????????' ],[ '' ],strip_tags( $r->objective ) ) );
            return $r;
        });
        return view( 'oknha' , ['data' => $records] );
    }
}
