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
    return view('login');
});

// Admin Login Page
Route::get('/admin/login','App\Http\Controllers\MAuthController@login');

// Login Page
Route::post('/login','App\Http\Controllers\AuthController@login');

// Sign Up Page
Route::post('/signup','App\Http\Controllers\AuthController@signup');

/* ADMIN CONTROLLER, {id/varname} pada edit, update dan delete sementara dihapus untuk preview front-end */
// Admin Page -- School
Route::get('/admin','App\Http\Controllers\MSchoolController@index'); // List User
Route::get('/admin/school','App\Http\Controllers\MSchoolController@index'); // List User
Route::get('/admin/school/create','App\Http\Controllers\MSchoolController@create'); // Form Create
Route::post('/admin/school/create','App\Http\Controllers\MSchoolController@store'); // Insert Data
Route::get('/admin/school/edit','App\Http\Controllers\MSchoolController@edit'); // Form Edit
Route::post('/admin/school/update','App\Http\Controllers\MSchoolController@update'); // Update Data
Route::get('/admin/school/delete','App\Http\Controllers\MSchoolController@destroy'); // Delete Data
Route::get('/admin/school/view','App\Http\Controllers\MSchoolController@view'); // View Report
Route::get('/admin/school/pdf','App\Http\Controllers\MSchoolController@pdf'); // Download PDF
Route::get('/admin/school/excel','App\Http\Controllers\MSchoolController@excel'); // Download Excel

// Admin Page -- Role
Route::get('/admin/role','App\Http\Controllers\MRoleController@index'); // List User
Route::get('/admin/role/create','App\Http\Controllers\MRoleController@create'); // Form Create
Route::post('/admin/role/create','App\Http\Controllers\MRoleController@store'); // Insert Data
Route::get('/admin/role/edit','App\Http\Controllers\MRoleController@edit'); // Form Edit
Route::post('/admin/role/update','App\Http\Controllers\MRoleController@update'); // Update Data
Route::get('/admin/role/delete','App\Http\Controllers\MRoleController@destroy'); // Delete Data
Route::get('/admin/role/view','App\Http\Controllers\MRoleController@view'); // View Report
Route::get('/admin/role/pdf','App\Http\Controllers\MRoleController@pdf'); // Download PDF
Route::get('/admin/role/excel','App\Http\Controllers\MRoleController@excel'); // Download Excel

// Admin Page -- Permission
Route::get('/admin/permission','App\Http\Controllers\MPermissionController@index'); // List User
Route::get('/admin/permission/create','App\Http\Controllers\MPermissionController@create'); // Form Create
Route::post('/admin/permission/create','App\Http\Controllers\MPermissionController@store'); // Insert Data
Route::get('/admin/permission/edit','App\Http\Controllers\MPermissionController@edit'); // Form Edit
Route::post('/admin/permission/update','App\Http\Controllers\MPermissionController@update'); // Update Data
Route::get('/admin/permission/delete','App\Http\Controllers\MPermissionController@destroy'); // Delete Data
Route::get('/admin/permission/view','App\Http\Controllers\MPermissionController@view'); // View Report
Route::get('/admin/permission/pdf','App\Http\Controllers\MPermissionController@pdf'); // Download PDF
Route::get('/admin/permission/excel','App\Http\Controllers\MPermissionController@excel'); // Download Excel

// Admin Page -- Log
Route::get('/admin/log','App\Http\Controllers\MLogController@index'); // List User
Route::get('/admin/log/create','App\Http\Controllers\MLogController@create'); // Form Create
Route::post('/admin/log/create','App\Http\Controllers\MLogController@store'); // Insert Data
Route::get('/admin/log/edit','App\Http\Controllers\MLogController@edit'); // Form Edit
Route::post('/admin/log/update','App\Http\Controllers\MLogController@update'); // Update Data
Route::get('/admin/log/delete','App\Http\Controllers\MLogController@destroy'); // Delete Data
Route::get('/admin/log/view','App\Http\Controllers\MLogController@view');     // View Report
Route::get('/admin/log/pdf','App\Http\Controllers\MLogController@pdf'); // Download PDF
Route::get('/admin/log/excel','App\Http\Controllers\MLogController@excel'); // Download Excel

// Admin Page -- Setting Account
Route::get('/admin/setting','App\Http\Controllers\MSettingController@index'); // List User
Route::get('/admin/setting/create','App\Http\Controllers\MSettingController@create'); // Form Create
Route::post('/admin/setting/create','App\Http\Controllers\MSettingController@store'); // Insert Data
Route::get('/admin/setting/edit','App\Http\Controllers\MSettingController@edit'); // Form Edit
Route::post('/admin/setting/update','App\Http\Controllers\MSettingController@update'); // Update Data
Route::get('/admin/setting/delete','App\Http\Controllers\MSettingController@destroy'); // Delete Data
Route::get('/admin/setting/view','App\Http\Controllers\MSettingController@view'); // View Report
Route::get('/admin/setting/pdf','App\Http\Controllers\MSettingController@pdf'); // Download PDF
Route::get('/admin/setting/excel','App\Http\Controllers\MSettingController@excel'); // Download Excel

// Admin Page -- School Dashboard [NEED EDIT BY ID]
Route::get('/admin/school/detail','App\Http\Controllers\MSchoolDashboardController@index'); // List User
Route::get('/admin/school/detail/school_dashboard','App\Http\Controllers\MSchoolDashboardController@index'); // List User
Route::get('/admin/school/detail/school_dashboard/create','App\Http\Controllers\MSchoolDashboardController@create'); // Form Create
Route::post('/admin/school/detail/school_dashboard/create','App\Http\Controllers\MSchoolDashboardController@store'); // Insert Data
Route::get('/admin/school/detail/school_dashboard/edit','App\Http\Controllers\MSchoolDashboardController@edit'); // Form Edit
Route::post('/admin/school/detail/school_dashboard/update','App\Http\Controllers\MSchoolDashboardController@update'); // Update Data
Route::get('/admin/school/detail/school_dashboard/delete','App\Http\Controllers\MSchoolDashboardController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_dashboard/view','App\Http\Controllers\MSchoolDashboardController@view'); // View Report
Route::get('/admin/school/detail/school_dashboard/pdf','App\Http\Controllers\MSchoolDashboardController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_dashboard/excel','App\Http\Controllers\MSchoolDashboardController@excel'); // Download Excel

// Admin Page -- School Info [NEED EDIT BY ID]
Route::get('/admin/school/detail/school_info','App\Http\Controllers\MSchoolInfoController@index'); // List User
Route::get('/admin/school/detail/school_info/create','App\Http\Controllers\MSchoolInfoController@create'); // Form Create
Route::post('/admin/school/detail/school_info/create','App\Http\Controllers\MSchoolInfoController@store'); // Insert Data
Route::get('/admin/school/detail/school_info/edit','App\Http\Controllers\MSchoolInfoController@edit'); // Form Edit
Route::post('/admin/school/detail/school_info/update','App\Http\Controllers\MSchoolInfoController@update'); // Update Data
Route::get('/admin/school/detail/school_info/delete','App\Http\Controllers\MSchoolInfoController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_info/view','App\Http\Controllers\MSchoolInfoController@view'); // View Report
Route::get('/admin/school/detail/school_info/pdf','App\Http\Controllers\MSchoolInfoController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_info/excel','App\Http\Controllers\MSchoolInfoController@excel'); // Download Excel

// Admin Page -- School Teacher [NEED EDIT BY ID]
Route::get('/admin/school/detail/school_teacher','App\Http\Controllers\MSchoolTeacherController@index'); // List User
Route::get('/admin/school/detail/school_teacher/create','App\Http\Controllers\MSchoolTeacherController@create'); // Form Create
Route::post('/admin/school/detail/school_teacher/create','App\Http\Controllers\MSchoolTeacherController@store'); // Insert Data
Route::get('/admin/school/detail/school_teacher/edit','App\Http\Controllers\MSchoolTeacherController@edit'); // Form Edit
Route::post('/admin/school/detail/school_teacher/update','App\Http\Controllers\MSchoolTeacherController@update'); // Update Data
Route::get('/admin/school/detail/school_teacher/delete','App\Http\Controllers\MSchoolTeacherController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_teacher/view','App\Http\Controllers\MSchoolTeacherController@view'); // View Report
Route::get('/admin/school/detail/school_teacher/pdf','App\Http\Controllers\MSchoolTeacherController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_teacher/excel','App\Http\Controllers\MSchoolTeacherController@excel'); // Download Excel

// Admin Page -- School Student [NEED EDIT BY ID]
Route::get('/admin/school/detail/school_student','App\Http\Controllers\MSchoolStudentController@index'); // List User
Route::get('/admin/school/detail/school_student/create','App\Http\Controllers\MSchoolStudentController@create'); // Form Create
Route::post('/admin/school/detail/school_student/create','App\Http\Controllers\MSchoolStudentController@store'); // Insert Data
Route::get('/admin/school/detail/school_student/edit','App\Http\Controllers\MSchoolStudentController@edit'); // Form Edit
Route::post('/admin/school/detail/school_student/update','App\Http\Controllers\MSchoolStudentController@update'); // Update Data
Route::get('/admin/school/detail/school_student/delete','App\Http\Controllers\MSchoolStudentController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_student/view','App\Http\Controllers\MSchoolStudentController@view'); // View Report
Route::get('/admin/school/detail/school_student/pdf','App\Http\Controllers\MSchoolStudentController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_student/excel','App\Http\Controllers\MSchoolStudentController@excel'); // Download Excel

// Admin Page -- School Class [NEED EDIT BY ID]
Route::get('/admin/school/detail/school_class','App\Http\Controllers\MSchoolClassController@index'); // List User
Route::get('/admin/school/detail/school_class/create','App\Http\Controllers\MSchoolClassController@create'); // Form Create
Route::post('/admin/school/detail/school_class/create','App\Http\Controllers\MSchoolClassController@store'); // Insert Data
Route::get('/admin/school/detail/school_class/edit','App\Http\Controllers\MSchoolClassController@edit'); // Form Edit
Route::post('/admin/school/detail/school_class/update','App\Http\Controllers\MSchoolClassController@update'); // Update Data
Route::get('/admin/school/detail/school_class/delete','App\Http\Controllers\MSchoolClassController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_class/view','App\Http\Controllers\MSchoolClassController@view'); // View Report
Route::get('/admin/school/detail/school_class/pdf','App\Http\Controllers\MSchoolClassController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_class/excel','App\Http\Controllers\MSchoolClassController@excel'); // Download Excel

// Admin Page -- School Studies [NEED EDIT BY ID]
Route::get('/admin/school/detail/school_studies','App\Http\Controllers\MSchoolStudiesController@index'); // List User
Route::get('/admin/school/detail/school_studies/create','App\Http\Controllers\MSchoolStudiesController@create'); // Form Create
Route::post('/admin/school/detail/school_studies/create','App\Http\Controllers\MSchoolStudiesController@store'); // Insert Data
Route::get('/admin/school/detail/school_studies/edit','App\Http\Controllers\MSchoolStudiesController@edit'); // Form Edit
Route::post('/admin/school/detail/school_studies/update','App\Http\Controllers\MSchoolStudiesController@update'); // Update Data
Route::get('/admin/school/detail/school_studies/delete','App\Http\Controllers\MSchoolStudiesController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_studies/view','App\Http\Controllers\MSchoolStudiesController@view'); // View Report
Route::get('/admin/school/detail/school_studies/pdf','App\Http\Controllers\MSchoolStudiesController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_studies/excel','App\Http\Controllers\MSchoolStudiesController@excel'); // Download Excel

// Admin Page -- School Schedule [NEED EDIT BY ID]
Route::get('/admin/school/detail/school_schedule','App\Http\Controllers\MSchoolScheduleController@index'); // List User
Route::get('/admin/school/detail/school_schedule/create','App\Http\Controllers\MSchoolScheduleController@create'); // Form Create
Route::post('/admin/school/detail/school_schedule/create','App\Http\Controllers\MSchoolScheduleController@store'); // Insert Data
Route::get('/admin/school/detail/school_schedule/edit','App\Http\Controllers\MSchoolScheduleController@edit'); // Form Edit
Route::post('/admin/school/detail/school_schedule/update','App\Http\Controllers\MSchoolScheduleController@update'); // Update Data
Route::get('/admin/school/detail/school_schedule/delete','App\Http\Controllers\MSchoolScheduleController@destroy'); // Delete Data
Route::get('/admin/school/detail/school_schedule/view','App\Http\Controllers\MSchoolScheduleController@view'); // View Report
Route::get('/admin/school/detail/school_schedule/pdf','App\Http\Controllers\MSchoolScheduleController@pdf'); // Download PDF
Route::get('/admin/school/detail/school_schedule/excel','App\Http\Controllers\MSchoolScheduleController@excel'); // Download Excel

/* TEACHER CONTROLLER, {id/varname} pada edit, update dan delete sementara dihapus untuk preview front-end */
// Teacher Page -- Dashboard
Route::get('/teacher','App\Http\Controllers\TDashboardController@index'); // List User
Route::get('/teacher/dashboard','App\Http\Controllers\TDashboardController@index'); // List User
Route::get('/teacher/dashboard/create','App\Http\Controllers\TDashboardController@create'); // Form Create
Route::post('/teacher/dashboard/create','App\Http\Controllers\TDashboardController@store'); // Insert Data
Route::get('/teacher/dashboard/edit','App\Http\Controllers\TDashboardController@edit'); // Form Edit
Route::post('/teacher/dashboard/update','App\Http\Controllers\TDashboardController@update'); // Update Data
Route::get('/teacher/dashboard/delete','App\Http\Controllers\TDashboardController@destroy'); // Delete Data
Route::get('/teacher/dashboard/view','App\Http\Controllers\TDashboardController@view'); // View Report
Route::get('/teacher/dashboard/pdf','App\Http\Controllers\TDashboardController@pdf'); // Download PDF
Route::get('/teacher/dashboard/excel','App\Http\Controllers\TDashboardController@excel'); // Download Excel

// Teacher Page -- Material Task
Route::get('/teacher/material_task','App\Http\Controllers\TMaterialTaskController@index'); // List User
Route::get('/teacher/material_task/create','App\Http\Controllers\TMaterialTaskController@create'); // Form Create
Route::post('/teacher/material_task/create','App\Http\Controllers\TMaterialTaskController@store'); // Insert Data
Route::get('/teacher/material_task/edit','App\Http\Controllers\TMaterialTaskController@edit'); // Form Edit
Route::post('/teacher/material_task/update','App\Http\Controllers\TMaterialTaskController@update'); // Update Data
Route::get('/teacher/material_task/delete','App\Http\Controllers\TMaterialTaskController@destroy'); // Delete Data
Route::get('/teacher/material_task/view','App\Http\Controllers\TMaterialTaskController@view'); // View Report
Route::get('/teacher/material_task/pdf','App\Http\Controllers\TMaterialTaskController@pdf'); // Download PDF
Route::get('/teacher/material_task/excel','App\Http\Controllers\TMaterialTaskController@excel'); // Download Excel

// Teacher Page -- Task Checker
Route::get('/teacher/task_checker','App\Http\Controllers\TTaskCheckerController@index'); // List User
Route::get('/teacher/task_checker/create','App\Http\Controllers\TTaskCheckerController@create'); // Form Create
Route::post('/teacher/task_checker/create','App\Http\Controllers\TTaskCheckerController@store'); // Insert Data
Route::get('/teacher/task_checker/edit','App\Http\Controllers\TTaskCheckerController@edit'); // Form Edit
Route::post('/teacher/task_checker/update','App\Http\Controllers\TTaskCheckerController@update'); // Update Data
Route::get('/teacher/task_checker/delete','App\Http\Controllers\TTaskCheckerController@destroy'); // Delete Data
Route::get('/teacher/task_checker/view','App\Http\Controllers\TTaskCheckerController@view'); // View Report
Route::get('/teacher/task_checker/pdf','App\Http\Controllers\TTaskCheckerController@pdf'); // Download PDF
Route::get('/teacher/task_checker/excel','App\Http\Controllers\TTaskCheckerController@excel'); // Download Excel

// Teacher Page -- Student Score
Route::get('/teacher/student_score','App\Http\Controllers\TStudentScoreController@index'); // List User
Route::get('/teacher/student_score/create','App\Http\Controllers\TStudentScoreController@create'); // Form Create
Route::post('/teacher/student_score/create','App\Http\Controllers\TStudentScoreController@store'); // Insert Data
Route::get('/teacher/student_score/edit','App\Http\Controllers\TStudentScoreController@edit'); // Form Edit
Route::post('/teacher/student_score/update','App\Http\Controllers\TStudentScoreController@update'); // Update Data
Route::get('/teacher/student_score/delete','App\Http\Controllers\TStudentScoreController@destroy'); // Delete Data
Route::get('/teacher/student_score/view','App\Http\Controllers\TStudentScoreController@view'); // View Report
Route::get('/teacher/student_score/pdf','App\Http\Controllers\TStudentScoreController@pdf'); // Download PDF
Route::get('/teacher/student_score/excel','App\Http\Controllers\TStudentScoreController@excel'); // Download Excel

// Teacher Page -- Profile
Route::get('/teacher/profile','App\Http\Controllers\TProfileController@index'); // List User
Route::get('/teacher/profile/create','App\Http\Controllers\TProfileController@create'); // Form Create
Route::post('/teacher/profile/create','App\Http\Controllers\TProfileController@store'); // Insert Data
Route::get('/teacher/profile/edit','App\Http\Controllers\TProfileController@edit'); // Form Edit
Route::post('/teacher/profile/update','App\Http\Controllers\TProfileController@update'); // Update Data
Route::get('/teacher/profile/delete','App\Http\Controllers\TProfileController@destroy'); // Delete Data
Route::get('/teacher/profile/view','App\Http\Controllers\TProfileController@view'); // View Report
Route::get('/teacher/profile/pdf','App\Http\Controllers\TProfileController@pdf'); // Download PDF
Route::get('/teacher/profile/excel','App\Http\Controllers\TProfileController@excel'); // Download Excel

// Teacher Page -- Class
Route::get('/teacher/class','App\Http\Controllers\TClassController@index'); // List User
Route::get('/teacher/class/create','App\Http\Controllers\TClassController@create'); // Form Create
Route::post('/teacher/class/create','App\Http\Controllers\TClassController@store'); // Insert Data
Route::get('/teacher/class/edit','App\Http\Controllers\TClassController@edit'); // Form Edit
Route::post('/teacher/class/update','App\Http\Controllers\TClassController@update'); // Update Data
Route::get('/teacher/class/delete','App\Http\Controllers\TClassController@destroy'); // Delete Data
Route::get('/teacher/class/view','App\Http\Controllers\TClassController@view'); // View Report
Route::get('/teacher/class/pdf','App\Http\Controllers\TClassController@pdf'); // Download PDF
Route::get('/teacher/class/excel','App\Http\Controllers\TClassController@excel'); // Download Excel

// Teacher Page -- Log
Route::get('/teacher/log','App\Http\Controllers\TLogController@index'); // List User
Route::get('/teacher/log/create','App\Http\Controllers\TLogController@create'); // Form Create
Route::post('/teacher/log/create','App\Http\Controllers\TLogController@store'); // Insert Data
Route::get('/teacher/log/edit','App\Http\Controllers\TLogController@edit'); // Form Edit
Route::post('/teacher/log/update','App\Http\Controllers\TLogController@update'); // Update Data
Route::get('/teacher/log/delete','App\Http\Controllers\TLogController@destroy'); // Delete Data
Route::get('/teacher/log/view','App\Http\Controllers\TLogController@view');     // View Report
Route::get('/teacher/log/pdf','App\Http\Controllers\TLogController@pdf'); // Download PDF
Route::get('/teacher/log/excel','App\Http\Controllers\TLogController@excel'); // Download Excel

/* STUDENT CONTROLLER, {id/varname} pada edit, update dan delete sementara dihapus untuk preview front-end */
// Student Page -- Dashboard
Route::get('/student','App\Http\Controllers\SDashboardController@index'); // List User
Route::get('/student/dashboard','App\Http\Controllers\SDashboardController@index'); // List User
Route::get('/student/dashboard/create','App\Http\Controllers\SDashboardController@create'); // Form Create
Route::post('/student/dashboard/create','App\Http\Controllers\SDashboardController@store'); // Insert Data
Route::get('/student/dashboard/edit','App\Http\Controllers\SDashboardController@edit'); // Form Edit
Route::post('/student/dashboard/update','App\Http\Controllers\SDashboardController@update'); // Update Data
Route::get('/student/dashboard/delete','App\Http\Controllers\SDashboardController@destroy'); // Delete Data
Route::get('/student/dashboard/view','App\Http\Controllers\SDashboardController@view'); // View Report
Route::get('/student/dashboard/pdf','App\Http\Controllers\SDashboardController@pdf'); // Download PDF
Route::get('/student/dashboard/excel','App\Http\Controllers\SDashboardController@excel'); // Download Excel

// Student Page -- Course
Route::get('/student/course','App\Http\Controllers\SCourseController@index'); // List User
Route::get('/student/course/create','App\Http\Controllers\SCourseController@create'); // Form Create
Route::post('/student/course/create','App\Http\Controllers\SCourseController@store'); // Insert Data
Route::get('/student/course/detail','App\Http\Controllers\SCourseController@detail'); // Form Edit
Route::get('/student/course/edit','App\Http\Controllers\SCourseController@edit'); // Form Edit
Route::post('/student/course/update','App\Http\Controllers\SCourseController@update'); // Update Data
Route::get('/student/course/delete','App\Http\Controllers\SCourseController@destroy'); // Delete Data
Route::get('/student/course/view','App\Http\Controllers\SCourseController@view'); // View Report
Route::get('/student/course/pdf','App\Http\Controllers\SCourseController@pdf'); // Download PDF
Route::get('/student/course/excel','App\Http\Controllers\SCourseController@excel'); // Download Excel

// Student Page -- Material Task
Route::get('/student/material_task','App\Http\Controllers\SMaterialTaskController@index'); // List User
Route::get('/student/material_task/create','App\Http\Controllers\SMaterialTaskController@create'); // Form Create
Route::get('/student/material_task/detail','App\Http\Controllers\SMaterialTaskController@detail'); // Form Create
Route::post('/student/material_task/create','App\Http\Controllers\SMaterialTaskController@store'); // Insert Data
Route::get('/student/material_task/edit','App\Http\Controllers\SMaterialTaskController@edit'); // Form Edit
Route::post('/student/material_task/update','App\Http\Controllers\SMaterialTaskController@update'); // Update Data
Route::get('/student/material_task/delete','App\Http\Controllers\SMaterialTaskController@destroy'); // Delete Data
Route::get('/student/material_task/view','App\Http\Controllers\SMaterialTaskController@view'); // View Report
Route::get('/student/material_task/pdf','App\Http\Controllers\SMaterialTaskController@pdf'); // Download PDF
Route::get('/student/material_task/excel','App\Http\Controllers\SMaterialTaskController@excel'); // Download Excel

// Student Page -- Score
Route::get('/student/score','App\Http\Controllers\SScoreController@index'); // List User
Route::get('/student/score/create','App\Http\Controllers\SScoreController@create'); // Form Create
Route::get('/student/score/detail','App\Http\Controllers\SScoreController@detail'); // Form Create
Route::post('/student/score/create','App\Http\Controllers\SScoreController@store'); // Insert Data
Route::get('/student/score/edit','App\Http\Controllers\SScoreController@edit'); // Form Edit
Route::post('/student/score/update','App\Http\Controllers\SScoreController@update'); // Update Data
Route::get('/student/score/delete','App\Http\Controllers\SScoreController@destroy'); // Delete Data
Route::get('/student/score/view','App\Http\Controllers\SScoreController@view'); // View Report
Route::get('/student/score/pdf','App\Http\Controllers\SScoreController@pdf'); // Download PDF
Route::get('/student/score/excel','App\Http\Controllers\SScoreController@excel'); // Download Excel

// Student Page -- Profile
Route::get('/student/profile','App\Http\Controllers\SProfileController@index'); // List User
Route::get('/student/profile/create','App\Http\Controllers\SProfileController@create'); // Form Create
Route::post('/student/profile/create','App\Http\Controllers\SProfileController@store'); // Insert Data
Route::get('/student/profile/edit','App\Http\Controllers\SProfileController@edit'); // Form Edit
Route::post('/student/profile/update','App\Http\Controllers\SProfileController@update'); // Update Data
Route::get('/student/profile/delete','App\Http\Controllers\SProfileController@destroy'); // Delete Data
Route::get('/student/profile/view','App\Http\Controllers\SProfileController@view'); // View Report
Route::get('/student/profile/pdf','App\Http\Controllers\SProfileController@pdf'); // Download PDF
Route::get('/student/profile/excel','App\Http\Controllers\SProfileController@excel'); // Download Excel

// Student Page -- Log
Route::get('/student/log','App\Http\Controllers\SLogController@index'); // List User
Route::get('/student/log/create','App\Http\Controllers\SLogController@create'); // Form Create
Route::post('/student/log/create','App\Http\Controllers\SLogController@store'); // Insert Data
Route::get('/student/log/edit','App\Http\Controllers\SLogController@edit'); // Form Edit
Route::post('/student/log/update','App\Http\Controllers\SLogController@update'); // Update Data
Route::get('/student/log/delete','App\Http\Controllers\SLogController@destroy'); // Delete Data
Route::get('/student/log/view','App\Http\Controllers\SLogController@view');     // View Report
Route::get('/student/log/pdf','App\Http\Controllers\SLogController@pdf'); // Download PDF
Route::get('/student/log/excel','App\Http\Controllers\SLogController@excel'); // Download Excel

/* PARENT CONTROLLER, {id/varname} pada edit, update dan delete sementara dihapus untuk preview front-end */
// Parent Page -- Dashboard
Route::get('/parent','App\Http\Controllers\PDashboardController@index'); // List User
Route::get('/parent/dashboard','App\Http\Controllers\PDashboardController@index'); // List User
Route::get('/parent/dashboard/create','App\Http\Controllers\PDashboardController@create'); // Form Create
Route::post('/parent/dashboard/create','App\Http\Controllers\PDashboardController@store'); // Insert Data
Route::get('/parent/dashboard/edit','App\Http\Controllers\PDashboardController@edit'); // Form Edit
Route::post('/parent/dashboard/update','App\Http\Controllers\PDashboardController@update'); // Update Data
Route::get('/parent/dashboard/delete','App\Http\Controllers\PDashboardController@destroy'); // Delete Data
Route::get('/parent/dashboard/view','App\Http\Controllers\PDashboardController@view'); // View Report
Route::get('/parent/dashboard/pdf','App\Http\Controllers\PDashboardController@pdf'); // Download PDF
Route::get('/parent/dashboard/excel','App\Http\Controllers\PDashboardController@excel'); // Download Excel

// Parent Page -- Course
Route::get('/parent/course','App\Http\Controllers\PCourseController@index'); // List User
Route::get('/parent/course/create','App\Http\Controllers\PCourseController@create'); // Form Create
Route::post('/parent/course/create','App\Http\Controllers\PCourseController@store'); // Insert Data
Route::get('/parent/course/edit','App\Http\Controllers\PCourseController@edit'); // Form Edit
Route::post('/parent/course/update','App\Http\Controllers\PCourseController@update'); // Update Data
Route::get('/parent/course/delete','App\Http\Controllers\PCourseController@destroy'); // Delete Data
Route::get('/parent/course/view','App\Http\Controllers\PCourseController@view'); // View Report
Route::get('/parent/course/pdf','App\Http\Controllers\PCourseController@pdf'); // Download PDF
Route::get('/parent/course/excel','App\Http\Controllers\PCourseController@excel'); // Download Excel

// Parent Page -- Material Task
Route::get('/parent/material_task','App\Http\Controllers\PMaterialTaskController@index'); // List User
Route::get('/parent/material_task/create','App\Http\Controllers\PMaterialTaskController@create'); // Form Create
Route::post('/parent/material_task/create','App\Http\Controllers\PMaterialTaskController@store'); // Insert Data
Route::get('/parent/material_task/edit','App\Http\Controllers\PMaterialTaskController@edit'); // Form Edit
Route::post('/parent/material_task/update','App\Http\Controllers\PMaterialTaskController@update'); // Update Data
Route::get('/parent/material_task/delete','App\Http\Controllers\PMaterialTaskController@destroy'); // Delete Data
Route::get('/parent/material_task/view','App\Http\Controllers\PMaterialTaskController@view'); // View Report
Route::get('/parent/material_task/pdf','App\Http\Controllers\PMaterialTaskController@pdf'); // Download PDF
Route::get('/parent/material_task/excel','App\Http\Controllers\PMaterialTaskController@excel'); // Download Excel

// Parent Page -- Score
Route::get('/parent/score','App\Http\Controllers\PScoreController@index'); // List User
Route::get('/parent/score/create','App\Http\Controllers\PScoreController@create'); // Form Create
Route::post('/parent/score/create','App\Http\Controllers\PScoreController@store'); // Insert Data
Route::get('/parent/score/edit','App\Http\Controllers\PScoreController@edit'); // Form Edit
Route::post('/parent/score/update','App\Http\Controllers\PScoreController@update'); // Update Data
Route::get('/parent/score/delete','App\Http\Controllers\PScoreController@destroy'); // Delete Data
Route::get('/parent/score/view','App\Http\Controllers\PScoreController@view'); // View Report
Route::get('/parent/score/pdf','App\Http\Controllers\PScoreController@pdf'); // Download PDF
Route::get('/parent/score/excel','App\Http\Controllers\PScoreController@excel'); // Download Excel

// Parent Page -- Profile
Route::get('/parent/profile','App\Http\Controllers\PProfileController@index'); // List User
Route::get('/parent/profile/create','App\Http\Controllers\PProfileController@create'); // Form Create
Route::post('/parent/profile/create','App\Http\Controllers\PProfileController@store'); // Insert Data
Route::get('/parent/profile/edit','App\Http\Controllers\PProfileController@edit'); // Form Edit
Route::post('/parent/profile/update','App\Http\Controllers\PProfileController@update'); // Update Data
Route::get('/parent/profile/delete','App\Http\Controllers\PProfileController@destroy'); // Delete Data
Route::get('/parent/profile/view','App\Http\Controllers\PProfileController@view'); // View Report
Route::get('/parent/profile/pdf','App\Http\Controllers\PProfileController@pdf'); // Download PDF
Route::get('/parent/profile/excel','App\Http\Controllers\PProfileController@excel'); // Download Excel

// Parent Page -- Log
Route::get('/parent/log','App\Http\Controllers\PLogController@index'); // List User
Route::get('/parent/log/create','App\Http\Controllers\PLogController@create'); // Form Create
Route::post('/parent/log/create','App\Http\Controllers\PLogController@store'); // Insert Data
Route::get('/parent/log/edit','App\Http\Controllers\PLogController@edit'); // Form Edit
Route::post('/parent/log/update','App\Http\Controllers\PLogController@update'); // Update Data
Route::get('/parent/log/delete','App\Http\Controllers\PLogController@destroy'); // Delete Data
Route::get('/parent/log/view','App\Http\Controllers\PLogController@view');     // View Report
Route::get('/parent/log/pdf','App\Http\Controllers\PLogController@pdf'); // Download PDF
Route::get('/parent/log/excel','App\Http\Controllers\PLogController@excel'); // Download Excel
