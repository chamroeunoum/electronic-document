<?php

use \App\Models\TrackPerformance;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Webapp\AuthController;
use App\Http\Controllers\Api\Webapp\UserController;
use App\Http\Controllers\Api\Webapp\ProfileController;
use App\Http\Controllers\Api\Webapp\FolderController;
use App\Http\Controllers\Api\Webapp\Regulator\SearchController;
use App\Http\Controllers\Api\Webapp\Regulator\RegulatorController;
use App\Http\Controllers\Api\Webapp\Regulator\TypeController;
use App\Http\Controllers\Api\Webapp\Regulator\OrganizationController;
use App\Http\Controllers\Api\Webapp\Regulator\SignatureController;
use App\Http\Controllers\Api\Webapp\Attendant\AttendantController;

Route::group([
  'prefix' => 'webapp' ,
  'api'
],function(){
  /** SIGNING SECTION */
  Route::group([
    'prefix' => 'authentication'
  ], function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('signup', [AuthController::class,'signup']);
    Route::put('signup/activate', [AuthController::class,'signupActivate']);
    Route::group([
      'middleware' => 'auth'
    ], function() {
        Route::post('logout', [AuthController::class,'logout']);
        Route::get('user', [AuthController::class,'user']);
    });
  });

  /** USER/ACCOUNT SECTION */
  Route::group([
    'prefix' => 'users' ,
    'middleware' => 'auth:api'
    ], function() {
      /**
       * Api for cin
       */
      Route::get('',[UserController::class,'index']);
      Route::post('',[UserController::class,'index']);
      Route::put('',[UserController::class,'update']);
      Route::get('{id}',[UserController::class,'read']);
      Route::delete('',[UserController::class,'destroy']);
      Route::put('activate',[UserController::class,'active']);
      Route::put('password/change',[UserController::class,'logout']);
      Route::post('upload',[UserController::class,'upload']);
  });

  Route::group([
    'prefix' => 'users/authenticated' ,
    'middleware' => 'auth:api'
    ], function() {
      /**
       * Api for profile
       */
          Route::get('',[ProfileController::class,'getAuthUser']);
          Route::put('',[ProfileController::class,'updateAuthUser']);
          Route::put('password',[ProfileController::class,'updateAuthUserPassword']);
          Route::post('picture/upload',[ProfileController::class,'upload']);
  });

  
  /** RESET PASSWORD */
  Route::put('password/forgot',[UserController::class,'forgotPassword']);
  Route::put('password/forgot/confirm',[UserController::class,'checkConfirmationCode']);
  Route::put('password/reset',[UserController::class,'passwordReset']);

  /** SEARCH SECTION */
  Route::group([
    'prefix' => 'search_regulators' ,
    ], function() {
      TrackPerformance::start('WebappSearchRegulator');
      Route::get('',[ SearchController::class , 'index']);
      TrackPerformance::end('WebappSearchRegulator');
      TrackPerformance::save();
      // Route::get('',function(){
      //   return 'I am "regulators->SearchController"';
      // });
      Route::get('pdf',[ SearchController::class , 'pdf']);
      Route::get('get/regulator/years',[ SearchController::class , 'getYears']);
      Route::group([
          'prefix' => 'types' ,
          ], function() {
              Route::get('compact', [ TypeController::class , 'index']);
      });
      Route::get('types/compact', [ TypeController::class , 'compactList']);
      Route::get('{id}',[ RegulatorController::class , 'read']);

  });

  /** SEARCH SECTION */
  Route::group([
    'prefix' => 'regulators' ,
    'namespace' => 'Api' ,
    'middleware' => 'authapi'
    ], function() {
      // Route::get('',[RegulatorController::class,'index']);
      Route::post('',[RegulatorController::class,'create']);
      Route::put('',[RegulatorController::class,'update']);
      Route::put('{id}/activate',[RegulatorController::class,'activate']);
      Route::put('{id}/deactivate',[RegulatorController::class,'deactivate']);
      Route::delete('',[RegulatorController::class,'destroy']);
      Route::post('upload',[RegulatorController::class,'upload']);

      Route::put('addreader',[RegulatorController::class,'addReaders']);
      Route::put('removereader',[RegulatorController::class,'removeReaders']);
      Route::put('{id}/accessibility',[RegulatorController::class,'accessibility']);

      // Route::get('pdf',[RegulatorController::class,'pdf']);
      // Route::group([
      //     'prefix' => 'types' ,
      //     ], function() {
      //       Route::get('', [TypeController::class,'index']);
      // });
      // Route::group([
      //   'prefix' => 'organizations' ,
      //   ], function() {
      //     Route::get('', [OrganizationController::class,'index']);
      // });
      // Route::group([
      //   'prefix' => 'signatures' ,
      //   ], function() {
      //     Route::get('', [SignatureController::class,'index']);
      // });
  });

  /** SEARCH SECTION */
  Route::group([
    'prefix' => 'regulators' ,
    'namespace' => 'Api' ,
    'middleware' => 'api'
    ], function() {
      Route::get('',[RegulatorController::class,'index']);
      Route::get('pdf',[RegulatorController::class,'pdf']);
      Route::group([
          'prefix' => 'types' ,
          ], function() {
            Route::get('', [TypeController::class,'index']);
      });
      Route::group([
        'prefix' => 'organizations' ,
        ], function() {
          Route::get('', [OrganizationController::class,'index']);
      });
      Route::group([
        'prefix' => 'signatures' ,
        ], function() {
          Route::get('', [SignatureController::class,'index']);
      });
  });

  /** ATTENDANT SECTION */
  Route::group([
    'prefix' => 'attendants' ,
    'namespace' => 'Api' ,
    'middleware' => 'auth:api'
    ], function() {
        Route::get('',[AttendantController::class,'index']);
        Route::put('update',[AttendantController::class,'update']);
        Route::get('{id}/read',[AttendantController::class,'read']);
        Route::delete('{id}/delete',[AttendantController::class,'destroy']);
        Route::post('checkin/face',[AttendantController::class,'checkin']);
        Route::post('checkin/finger',[AttendantController::class,'checkin']);
        Route::post('checkin/system',[AttendantController::class,'checkin']);
        Route::post('checkout/face',[AttendantController::class,'checkout']);
        Route::post('checkout/finger',[AttendantController::class,'checkout']);
        Route::post('checkout/system',[AttendantController::class,'checkout']);
  });

  Route::group([
    'prefix' => 'regulators' ,
    'namespace' => 'Api' ,
    'middleware' => 'auth:api'
    ], function() {;
        Route::get('pdf',[RegulatorController::class,'pdf']);
  });

  /** FOLDER SECTION */
  Route::group([
    'prefix' => 'folders' ,
    'middleware' => 'auth:api'
    ], function() {

        Route::get('',[ FolderController::class , 'index']);
        Route::post('',[ FolderController::class , 'create']);
        Route::get('{id}/read',[ FolderController::class , 'read']);
        Route::put('',[ FolderController::class , 'update']);
        Route::delete('',[ FolderController::class , 'delete']);
        Route::get('regulators',[ FolderController::class , 'regulators']);
        Route::put('regulators/add',[ FolderController::class , 'addRegulatorToFolder']);
        Route::put('regulators/remove',[ FolderController::class , 'removeRegulatorFromFolder']);
        Route::put('regulators/check',[ FolderController::class , 'checkRegulator']);
        Route::get('user',[ FolderController::class , 'user']);
        Route::get('list/regulator/validation',[ FolderController::class , 'listFolderWithRegulatorValidation']);

        Route::put('{id}/accessibility',[FolderController::class,'accessibility']);
        
  });
  /** FOLDER SECTION */
  Route::group([
    'prefix' => 'folders' ,
    'middleware' => 'api'
    ], function() {
      Route::get('regulators',[ FolderController::class , 'regulators']);
      Route::get('global',[ FolderController::class , 'globalFolder']);
        
  });
  

});