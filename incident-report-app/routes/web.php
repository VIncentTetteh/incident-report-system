<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MaritimerecordsController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'UserController');

    Route::resource('permission', 'PermissionController');

    Route::resource('role', 'RoleController');
    Route::resource('reports','MaritimerecordsController');



    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user','UserController');
Route::resource('role','RoleController');
Route::resource('reports','MaritimerecordsController');
Route::resource('permission','PermissionController');
Route::get('/profile','UserController@profile')->name('user.profile');
Route::post('/profile','UserController@postProfile')->name('user.postProfile');
Route::get('/password/change','UserController@getPassword')->name('userGetPassword');
Route::post('/password/change','UserController@postPassword')->name('userPostPassword');



//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::put('/reports/update/{id}','MaritimerecordsController@edit');

