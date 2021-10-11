<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
});

// Login Page
Route::post('/login','AuthController@login');

// Sign Up Page
Route::post('/signup','AuthController@signup');

// Admin Page -- Dashboard
Route::get('/admin/dashboard','MDashboardController@index'); // List User
Route::get('/admin/dashboard/create','MDashboardController@create'); // Form Create
Route::post('/admin/dashboard/create','MDashboardController@store'); // Insert Data
Route::get('/admin/dashboard/edit/{id}','MDashboardController@edit'); // Form Edit
Route::post('/admin/dashboard/update/{id}','MDashboardController@update'); // Update Data
Route::get('/admin/dashboard/delete/{id}','MDashboardController@destroy'); // Delete Data
Route::get('/admin/dashboard/view','MDashboardController@view'); // View Report
Route::get('/admin/dashboard/pdf','MDashboardController@pdf'); // Download PDF
Route::get('/admin/dashboard/excel','MDashboardController@excel'); // Download Excel

// Admin Page -- Role
Route::get('/admin/role','MRoleController@index'); // List User
Route::get('/admin/role/create','MRoleController@create'); // Form Create
Route::post('/admin/role/create','MRoleController@store'); // Insert Data
Route::get('/admin/role/edit/{id}','MRoleController@edit'); // Form Edit
Route::post('/admin/role/update/{id}','MRoleController@update'); // Update Data
Route::get('/admin/role/delete/{id}','MRoleController@destroy'); // Delete Data
Route::get('/admin/role/view','MRoleController@view'); // View Report
Route::get('/admin/role/pdf','MRoleController@pdf'); // Download PDF
Route::get('/admin/role/excel','MRoleController@excel'); // Download Excel

// Admin Page -- Permission
Route::get('/admin/permission','MPermissionController@index'); // List User
Route::get('/admin/permission/create','MPermissionController@create'); // Form Create
Route::post('/admin/permission/create','MPermissionController@store'); // Insert Data
Route::get('/admin/permission/edit/{id}','MPermissionController@edit'); // Form Edit
Route::post('/admin/permission/update/{id}','MPermissionController@update'); // Update Data
Route::get('/admin/permission/delete/{id}','MPermissionController@destroy'); // Delete Data
Route::get('/admin/permission/view','MPermissionController@view'); // View Report
Route::get('/admin/permission/pdf','MPermissionController@pdf'); // Download PDF
Route::get('/admin/permission/excel','MPermissionController@excel'); // Download Excel

// Admin Page -- Sekolah
Route::get('/admin/sekolah','MSekolahController@index'); // List User
Route::get('/admin/sekolah/create','MSekolahController@create'); // Form Create
Route::post('/admin/sekolah/create','MSekolahController@store'); // Insert Data
Route::get('/admin/sekolah/edit/{id}','MSekolahController@edit'); // Form Edit
Route::post('/admin/sekolah/update/{id}','MSekolahController@update'); // Update Data
Route::get('/admin/sekolah/delete/{id}','MSekolahController@destroy'); // Delete Data
Route::get('/admin/sekolah/view','MSekolahController@view'); // View Report
Route::get('/admin/sekolah/pdf','MSekolahController@pdf'); // Download PDF
Route::get('/admin/sekolah/excel','MSekolahController@excel'); // Download Excel

// Admin Page -- Log
Route::get('/admin/log','MLogController@index'); // List User
Route::get('/admin/log/create','MLogController@create'); // Form Create
Route::post('/admin/log/create','MLogController@store'); // Insert Data
Route::get('/admin/log/edit/{id}','MLogController@edit'); // Form Edit
Route::post('/admin/log/update/{id}','MLogController@update'); // Update Data
Route::get('/admin/log/delete/{id}','MLogController@destroy'); // Delete Data
Route::get('/admin/log/view','MLogController@view');     // View Report
Route::get('/admin/log/pdf','MLogController@pdf'); // Download PDF
Route::get('/admin/log/excel','MLogController@excel'); // Download Excel



// Teacher Page -- Dashboard
Route::get('/teacher/dashboard','TDashboardController@index'); // List User
Route::get('/teacher/dashboard/create','TDashboardController@create'); // Form Create
Route::post('/teacher/dashboard/create','TDashboardController@store'); // Insert Data
Route::get('/teacher/dashboard/edit/{id}','TDashboardController@edit'); // Form Edit
Route::post('/teacher/dashboard/update/{id}','TDashboardController@update'); // Update Data
Route::get('/teacher/dashboard/delete/{id}','TDashboardController@destroy'); // Delete Data
Route::get('/teacher/dashboard/view','TDashboardController@view'); // View Report
Route::get('/teacher/dashboard/pdf','TDashboardController@pdf'); // Download PDF
Route::get('/teacher/dashboard/excel','TDashboardController@excel'); // Download Excel

// Student Page -- Dashboard
Route::get('/student/dashboard','SDashboardController@index'); // List User
Route::get('/student/dashboard/create','SDashboardController@create'); // Form Create
Route::post('/student/dashboard/create','SDashboardController@store'); // Insert Data
Route::get('/student/dashboard/edit/{id}','SDashboardController@edit'); // Form Edit
Route::post('/student/dashboard/update/{id}','SDashboardController@update'); // Update Data
Route::get('/student/dashboard/delete/{id}','SDashboardController@destroy'); // Delete Data
Route::get('/student/dashboard/view','SDashboardController@view'); // View Report
Route::get('/student/dashboard/pdf','SDashboardController@pdf'); // Download PDF
Route::get('/student/dashboard/excel','SDashboardController@excel'); // Download Excel

// Parent Page -- Dashboard
Route::get('/parent/dashboard','PDashboardController@index'); // List User
Route::get('/parent/dashboard/create','PDashboardController@create'); // Form Create
Route::post('/parent/dashboard/create','PDashboardController@store'); // Insert Data
Route::get('/parent/dashboard/edit/{id}','PDashboardController@edit'); // Form Edit
Route::post('/parent/dashboard/update/{id}','PDashboardController@update'); // Update Data
Route::get('/parent/dashboard/delete/{id}','PDashboardController@destroy'); // Delete Data
Route::get('/parent/dashboard/view','PDashboardController@view'); // View Report
Route::get('/parent/dashboard/pdf','PDashboardController@pdf'); // Download PDF
Route::get('/parent/dashboard/excel','PDashboardController@excel'); // Download Excel