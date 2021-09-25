<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('classs','App\Http\Controllers\ClassController');
Route::apiResource('students','App\Http\Controllers\StudentController');
Route::apiResource('studentclass','App\Http\Controllers\StudentClassController');
Route::post('register', 'App\Http\Controllers\RegisterController@register');
Route::post('login', 'App\Http\Controllers\RegisterController@login');
Route::get('lknn/{classs}', 'App\Http\Controllers\ClassController@nnCountStudentOnClass');
Route::get('allstudents', 'App\Http\Controllers\ClassController@allClassStudent');
Route::get('showclass/{classs}', 'App\Http\Controllers\ClassController@showClass');