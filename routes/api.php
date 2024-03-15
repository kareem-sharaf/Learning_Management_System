<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('sendSMS', [SMSController::class, 'sendSMS']);


Route::group(['prefix' => 'auth'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');

        Route::group(['middleware' => 'auth:sanctum'], function () {
            Route::get('logout', 'logout');
        });
    });
});

//  stages routes
Route::group(['prefix' => 'stage'], function () {
    Route::controller(StageController::class)->group(function () {
        Route::get('index', 'index');
        Route::post('add', 'add');
        Route::post('search', 'search');
        Route::post('update', 'update');
        Route::post('destroy', 'destroy');
    });
});

//  years routes
Route::group(['prefix' => 'year'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('index', 'index');
        Route::post('add', 'add');
        Route::post('saerch', 'search');
        Route::post('update', 'update');
        Route::post('destroy', 'destroy');
    });
});




Route::group(['prefix' => 'teacher'], function () {
    Route::controller(TeachersController::class)->group(function () {
        Route::get('show_one_teacher/{teacher_id}', 'show_one_teacher');
        Route::post('show_all_teachers', 'show_all_teachers');
        Route::get('show_stage_teachers/{stage_id}', 'show_stage_teachers');
        Route::get('show_year_teachers/{year_id}', 'show_year_teachers');

        Route::post('search_to_teacher', 'search_to_teacher');

        Route::group(['middleware' => 'auth:sanctum'], function () {
            Route::post('add_teacher', 'add_teacher');
            Route::post('add_teacher_and_assign_subjects', 'add_teacher_and_assign_subjects');
            Route::post('edit_teacher/{teacher_id}', 'edit_teacher');
            Route::delete('delete_teacher/{teacher_id}', 'delete_teacher');

        });
    });
});
