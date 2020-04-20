<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post("/master/modul", "modulControl@index");
Route::post("/master/acl", "aclControl@index");
Route::POST("/master/aclGroup", "aclGroupControl@index");

Route::POST("/master/users", "userControl@index");

Route::POST("/master/opd", "opdControl@index");

Route::POST("/login/submitform", "appControl@loginSubmit");

Route::get("/acl", "aclControl@index");
Route::post("/aclgetR", "aclControl@aclGet");

Route::POST("/realisasi", "investasiControl@index");


Route::get("/{any}", "appControl@index")->where("any", ".*");
