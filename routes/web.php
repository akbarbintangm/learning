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

/* ADMIN CONTROLLER */
// Admin Page -- School
Route::get('/admin/school','MSchoolController@index'); // List User
Route::get('/admin/school/create','MSchoolController@create'); // Form Create
Route::post('/admin/school/create','MSchoolController@store'); // Insert Data
Route::get('/admin/school/edit/{id}','MSchoolController@edit'); // Form Edit
Route::post('/admin/school/update/{id}','MSchoolController@update'); // Update Data
Route::get('/admin/school/delete/{id}','MSchoolController@destroy'); // Delete Data
Route::get('/admin/school/view','MSchoolController@view'); // View Report
Route::get('/admin/school/pdf','MSchoolController@pdf'); // Download PDF
Route::get('/admin/school/excel','MSchoolController@excel'); // Download Excel

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

// Admin Page -- Setting Account
Route::get('/admin/setting','MSettingController@index'); // List User
Route::get('/admin/setting/create','MSettingController@create'); // Form Create
Route::post('/admin/setting/create','MSettingController@store'); // Insert Data
Route::get('/admin/setting/edit/{id}','MSettingController@edit'); // Form Edit
Route::post('/admin/setting/update/{id}','MSettingController@update'); // Update Data
Route::get('/admin/setting/delete/{id}','MSettingController@destroy'); // Delete Data
Route::get('/admin/setting/view','MSettingController@view'); // View Report
Route::get('/admin/setting/pdf','MSettingController@pdf'); // Download PDF
Route::get('/admin/setting/excel','MSettingController@excel'); // Download Excel

// Admin Page -- School Dashboard [NEED EDIT BY ID]
Route::get('/admin/school_dashboard','MSchoolDashboardController@index'); // List User
Route::get('/admin/school_dashboard/create','MSchoolDashboardController@create'); // Form Create
Route::post('/admin/school_dashboard/create','MSchoolDashboardController@store'); // Insert Data
Route::get('/admin/school_dashboard/edit/{id}','MSchoolDashboardController@edit'); // Form Edit
Route::post('/admin/school_dashboard/update/{id}','MSchoolDashboardController@update'); // Update Data
Route::get('/admin/school_dashboard/delete/{id}','MSchoolDashboardController@destroy'); // Delete Data
Route::get('/admin/school_dashboard/view','MSchoolDashboardController@view'); // View Report
Route::get('/admin/school_dashboard/pdf','MSchoolDashboardController@pdf'); // Download PDF
Route::get('/admin/school_dashboard/excel','MSchoolDashboardController@excel'); // Download Excel

// Admin Page -- School Info [NEED EDIT BY ID]
Route::get('/admin/school_info','MSchoolInfoController@index'); // List User
Route::get('/admin/school_info/create','MSchoolInfoController@create'); // Form Create
Route::post('/admin/school_info/create','MSchoolInfoController@store'); // Insert Data
Route::get('/admin/school_info/edit/{id}','MSchoolInfoController@edit'); // Form Edit
Route::post('/admin/school_info/update/{id}','MSchoolInfoController@update'); // Update Data
Route::get('/admin/school_info/delete/{id}','MSchoolInfoController@destroy'); // Delete Data
Route::get('/admin/school_info/view','MSchoolInfoController@view'); // View Report
Route::get('/admin/school_info/pdf','MSchoolInfoController@pdf'); // Download PDF
Route::get('/admin/school_info/excel','MSchoolInfoController@excel'); // Download Excel

// Admin Page -- School Teacher [NEED EDIT BY ID]
Route::get('/admin/school_teacher','MSchoolTeacherController@index'); // List User
Route::get('/admin/school_teacher/create','MSchoolTeacherController@create'); // Form Create
Route::post('/admin/school_teacher/create','MSchoolTeacherController@store'); // Insert Data
Route::get('/admin/school_teacher/edit/{id}','MSchoolTeacherController@edit'); // Form Edit
Route::post('/admin/school_teacher/update/{id}','MSchoolTeacherController@update'); // Update Data
Route::get('/admin/school_teacher/delete/{id}','MSchoolTeacherController@destroy'); // Delete Data
Route::get('/admin/school_teacher/view','MSchoolTeacherController@view'); // View Report
Route::get('/admin/school_teacher/pdf','MSchoolTeacherController@pdf'); // Download PDF
Route::get('/admin/school_teacher/excel','MSchoolTeacherController@excel'); // Download Excel

// Admin Page -- School Student [NEED EDIT BY ID]
Route::get('/admin/school_class','MSchoolStudentController@index'); // List User
Route::get('/admin/school_student/create','MSchoolStudentController@create'); // Form Create
Route::post('/admin/school_student/create','MSchoolStudentController@store'); // Insert Data
Route::get('/admin/school_student/edit/{id}','MSchoolStudentController@edit'); // Form Edit
Route::post('/admin/school_student/update/{id}','MSchoolStudentController@update'); // Update Data
Route::get('/admin/school_student/delete/{id}','MSchoolStudentController@destroy'); // Delete Data
Route::get('/admin/school_student/view','MSchoolStudentController@view'); // View Report
Route::get('/admin/school_student/pdf','MSchoolStudentController@pdf'); // Download PDF
Route::get('/admin/school_student/excel','MSchoolStudentController@excel'); // Download Excel

// Admin Page -- School Class [NEED EDIT BY ID]
Route::get('/admin/school_class','MSchoolClassController@index'); // List User
Route::get('/admin/school_class/create','MSchoolClassController@create'); // Form Create
Route::post('/admin/school_class/create','MSchoolClassController@store'); // Insert Data
Route::get('/admin/school_class/edit/{id}','MSchoolClassController@edit'); // Form Edit
Route::post('/admin/school_class/update/{id}','MSchoolClassController@update'); // Update Data
Route::get('/admin/school_class/delete/{id}','MSchoolClassController@destroy'); // Delete Data
Route::get('/admin/school_class/view','MSchoolClassController@view'); // View Report
Route::get('/admin/school_class/pdf','MSchoolClassController@pdf'); // Download PDF
Route::get('/admin/school_class/excel','MSchoolClassController@excel'); // Download Excel

// Admin Page -- School Studies [NEED EDIT BY ID]
Route::get('/admin/school_studies','MSchoolStudiesController@index'); // List User
Route::get('/admin/school_studies/create','MSchoolStudiesController@create'); // Form Create
Route::post('/admin/school_studies/create','MSchoolStudiesController@store'); // Insert Data
Route::get('/admin/school_studies/edit/{id}','MSchoolStudiesController@edit'); // Form Edit
Route::post('/admin/school_studies/update/{id}','MSchoolStudiesController@update'); // Update Data
Route::get('/admin/school_studies/delete/{id}','MSchoolStudiesController@destroy'); // Delete Data
Route::get('/admin/school_studies/view','MSchoolStudiesController@view'); // View Report
Route::get('/admin/school_studies/pdf','MSchoolStudiesController@pdf'); // Download PDF
Route::get('/admin/school_studies/excel','MSchoolStudiesController@excel'); // Download Excel

// Admin Page -- School Schedule [NEED EDIT BY ID]
Route::get('/admin/school_schedule','MSchoolScheduleController@index'); // List User
Route::get('/admin/school_schedule/create','MSchoolScheduleController@create'); // Form Create
Route::post('/admin/school_schedule/create','MSchoolScheduleController@store'); // Insert Data
Route::get('/admin/school_schedule/edit/{id}','MSchoolScheduleController@edit'); // Form Edit
Route::post('/admin/school_schedule/update/{id}','MSchoolScheduleController@update'); // Update Data
Route::get('/admin/school_schedule/delete/{id}','MSchoolScheduleController@destroy'); // Delete Data
Route::get('/admin/school_schedule/view','MSchoolScheduleController@view'); // View Report
Route::get('/admin/school_schedule/pdf','MSchoolScheduleController@pdf'); // Download PDF
Route::get('/admin/school_schedule/excel','MSchoolScheduleController@excel'); // Download Excel

/* TEACHER CONTROLLER */
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

// Teacher Page -- Material Task
Route::get('/teacher/material_task','TMaterialTaskController@index'); // List User
Route::get('/teacher/material_task/create','TMaterialTaskController@create'); // Form Create
Route::post('/teacher/material_task/create','TMaterialTaskController@store'); // Insert Data
Route::get('/teacher/material_task/edit/{id}','TMaterialTaskController@edit'); // Form Edit
Route::post('/teacher/material_task/update/{id}','TMaterialTaskController@update'); // Update Data
Route::get('/teacher/material_task/delete/{id}','TMaterialTaskController@destroy'); // Delete Data
Route::get('/teacher/material_task/view','TMaterialTaskController@view'); // View Report
Route::get('/teacher/material_task/pdf','TMaterialTaskController@pdf'); // Download PDF
Route::get('/teacher/material_task/excel','TMaterialTaskController@excel'); // Download Excel

// Teacher Page -- Task Checker
Route::get('/teacher/task_checker','TTaskCheckerController@index'); // List User
Route::get('/teacher/task_checker/create','TTaskCheckerController@create'); // Form Create
Route::post('/teacher/task_checker/create','TTaskCheckerController@store'); // Insert Data
Route::get('/teacher/task_checker/edit/{id}','TTaskCheckerController@edit'); // Form Edit
Route::post('/teacher/task_checker/update/{id}','TTaskCheckerController@update'); // Update Data
Route::get('/teacher/task_checker/delete/{id}','TTaskCheckerController@destroy'); // Delete Data
Route::get('/teacher/task_checker/view','TTaskCheckerController@view'); // View Report
Route::get('/teacher/task_checker/pdf','TTaskCheckerController@pdf'); // Download PDF
Route::get('/teacher/task_checker/excel','TTaskCheckerController@excel'); // Download Excel

// Teacher Page -- Student Score
Route::get('/teacher/student_score','TStudentScoreController@index'); // List User
Route::get('/teacher/student_score/create','TStudentScoreController@create'); // Form Create
Route::post('/teacher/student_score/create','TStudentScoreController@store'); // Insert Data
Route::get('/teacher/student_score/edit/{id}','TStudentScoreController@edit'); // Form Edit
Route::post('/teacher/student_score/update/{id}','TStudentScoreController@update'); // Update Data
Route::get('/teacher/student_score/delete/{id}','TStudentScoreController@destroy'); // Delete Data
Route::get('/teacher/student_score/view','TStudentScoreController@view'); // View Report
Route::get('/teacher/student_score/pdf','TStudentScoreController@pdf'); // Download PDF
Route::get('/teacher/student_score/excel','TStudentScoreController@excel'); // Download Excel

// Teacher Page -- Profile
Route::get('/teacher/profile','TProfileController@index'); // List User
Route::get('/teacher/profile/create','TProfileController@create'); // Form Create
Route::post('/teacher/profile/create','TProfileController@store'); // Insert Data
Route::get('/teacher/profile/edit/{id}','TProfileController@edit'); // Form Edit
Route::post('/teacher/profile/update/{id}','TProfileController@update'); // Update Data
Route::get('/teacher/profile/delete/{id}','TProfileController@destroy'); // Delete Data
Route::get('/teacher/profile/view','TProfileController@view'); // View Report
Route::get('/teacher/profile/pdf','TProfileController@pdf'); // Download PDF
Route::get('/teacher/profile/excel','TProfileController@excel'); // Download Excel

// Teacher Page -- Class
Route::get('/teacher/class','TClassController@index'); // List User
Route::get('/teacher/class/create','TClassController@create'); // Form Create
Route::post('/teacher/class/create','TClassController@store'); // Insert Data
Route::get('/teacher/class/edit/{id}','TClassController@edit'); // Form Edit
Route::post('/teacher/class/update/{id}','TClassController@update'); // Update Data
Route::get('/teacher/class/delete/{id}','TClassController@destroy'); // Delete Data
Route::get('/teacher/class/view','TClassController@view'); // View Report
Route::get('/teacher/class/pdf','TClassController@pdf'); // Download PDF
Route::get('/teacher/class/excel','TClassController@excel'); // Download Excel

// Teacher Page -- Log
Route::get('/teacher/log','TLogController@index'); // List User
Route::get('/teacher/log/create','TLogController@create'); // Form Create
Route::post('/teacher/log/create','TLogController@store'); // Insert Data
Route::get('/teacher/log/edit/{id}','TLogController@edit'); // Form Edit
Route::post('/teacher/log/update/{id}','TLogController@update'); // Update Data
Route::get('/teacher/log/delete/{id}','TLogController@destroy'); // Delete Data
Route::get('/teacher/log/view','TLogController@view');     // View Report
Route::get('/teacher/log/pdf','TLogController@pdf'); // Download PDF
Route::get('/teacher/log/excel','TLogController@excel'); // Download Excel

/* STUDENT CONTROLLER */
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

// Student Page -- Course
Route::get('/student/course','SCourseController@index'); // List User
Route::get('/student/course/create','SCourseController@create'); // Form Create
Route::post('/student/course/create','SCourseController@store'); // Insert Data
Route::get('/student/course/edit/{id}','SCourseController@edit'); // Form Edit
Route::post('/student/course/update/{id}','SCourseController@update'); // Update Data
Route::get('/student/course/delete/{id}','SCourseController@destroy'); // Delete Data
Route::get('/student/course/view','SCourseController@view'); // View Report
Route::get('/student/course/pdf','SCourseController@pdf'); // Download PDF
Route::get('/student/course/excel','SCourseController@excel'); // Download Excel

// Student Page -- Material Task
Route::get('/student/material_task','SMaterialTaskController@index'); // List User
Route::get('/student/material_task/create','SMaterialTaskController@create'); // Form Create
Route::post('/student/material_task/create','SMaterialTaskController@store'); // Insert Data
Route::get('/student/material_task/edit/{id}','SMaterialTaskController@edit'); // Form Edit
Route::post('/student/material_task/update/{id}','SMaterialTaskController@update'); // Update Data
Route::get('/student/material_task/delete/{id}','SMaterialTaskController@destroy'); // Delete Data
Route::get('/student/material_task/view','SMaterialTaskController@view'); // View Report
Route::get('/student/material_task/pdf','SMaterialTaskController@pdf'); // Download PDF
Route::get('/student/material_task/excel','SMaterialTaskController@excel'); // Download Excel

// Student Page -- Score
Route::get('/student/score','SScoreController@index'); // List User
Route::get('/student/score/create','SScoreController@create'); // Form Create
Route::post('/student/score/create','SScoreController@store'); // Insert Data
Route::get('/student/score/edit/{id}','SScoreController@edit'); // Form Edit
Route::post('/student/score/update/{id}','SScoreController@update'); // Update Data
Route::get('/student/score/delete/{id}','SScoreController@destroy'); // Delete Data
Route::get('/student/score/view','SScoreController@view'); // View Report
Route::get('/student/score/pdf','SScoreController@pdf'); // Download PDF
Route::get('/student/score/excel','SScoreController@excel'); // Download Excel

// Student Page -- Profile
Route::get('/student/profile','SProfileController@index'); // List User
Route::get('/student/profile/create','SProfileController@create'); // Form Create
Route::post('/student/profile/create','SProfileController@store'); // Insert Data
Route::get('/student/profile/edit/{id}','SProfileController@edit'); // Form Edit
Route::post('/student/profile/update/{id}','SProfileController@update'); // Update Data
Route::get('/student/profile/delete/{id}','SProfileController@destroy'); // Delete Data
Route::get('/student/profile/view','SProfileController@view'); // View Report
Route::get('/student/profile/pdf','SProfileController@pdf'); // Download PDF
Route::get('/student/profile/excel','SProfileController@excel'); // Download Excel

// Student Page -- Log
Route::get('/student/log','SLogController@index'); // List User
Route::get('/student/log/create','SLogController@create'); // Form Create
Route::post('/student/log/create','SLogController@store'); // Insert Data
Route::get('/student/log/edit/{id}','SLogController@edit'); // Form Edit
Route::post('/student/log/update/{id}','SLogController@update'); // Update Data
Route::get('/student/log/delete/{id}','SLogController@destroy'); // Delete Data
Route::get('/student/log/view','SLogController@view');     // View Report
Route::get('/student/log/pdf','SLogController@pdf'); // Download PDF
Route::get('/student/log/excel','SLogController@excel'); // Download Excel

/* PARENT CONTROLLER */
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

// Parent Page -- Course
Route::get('/parent/course','PCourseController@index'); // List User
Route::get('/parent/course/create','PCourseController@create'); // Form Create
Route::post('/parent/course/create','PCourseController@store'); // Insert Data
Route::get('/parent/course/edit/{id}','PCourseController@edit'); // Form Edit
Route::post('/parent/course/update/{id}','PCourseController@update'); // Update Data
Route::get('/parent/course/delete/{id}','PCourseController@destroy'); // Delete Data
Route::get('/parent/course/view','PCourseController@view'); // View Report
Route::get('/parent/course/pdf','PCourseController@pdf'); // Download PDF
Route::get('/parent/course/excel','PCourseController@excel'); // Download Excel

// Parent Page -- Material Task
Route::get('/parent/material_task','PMaterialTaskController@index'); // List User
Route::get('/parent/material_task/create','PMaterialTaskController@create'); // Form Create
Route::post('/parent/material_task/create','PMaterialTaskController@store'); // Insert Data
Route::get('/parent/material_task/edit/{id}','PMaterialTaskController@edit'); // Form Edit
Route::post('/parent/material_task/update/{id}','PMaterialTaskController@update'); // Update Data
Route::get('/parent/material_task/delete/{id}','PMaterialTaskController@destroy'); // Delete Data
Route::get('/parent/material_task/view','PMaterialTaskController@view'); // View Report
Route::get('/parent/material_task/pdf','PMaterialTaskController@pdf'); // Download PDF
Route::get('/parent/material_task/excel','PMaterialTaskController@excel'); // Download Excel

// Parent Page -- Score
Route::get('/parent/score','PScoreController@index'); // List User
Route::get('/parent/score/create','PScoreController@create'); // Form Create
Route::post('/parent/score/create','PScoreController@store'); // Insert Data
Route::get('/parent/score/edit/{id}','PScoreController@edit'); // Form Edit
Route::post('/parent/score/update/{id}','PScoreController@update'); // Update Data
Route::get('/parent/score/delete/{id}','PScoreController@destroy'); // Delete Data
Route::get('/parent/score/view','PScoreController@view'); // View Report
Route::get('/parent/score/pdf','PScoreController@pdf'); // Download PDF
Route::get('/parent/score/excel','PScoreController@excel'); // Download Excel

// Parent Page -- Profile
Route::get('/parent/profile','PProfileController@index'); // List User
Route::get('/parent/profile/create','PProfileController@create'); // Form Create
Route::post('/parent/profile/create','PProfileController@store'); // Insert Data
Route::get('/parent/profile/edit/{id}','PProfileController@edit'); // Form Edit
Route::post('/parent/profile/update/{id}','PProfileController@update'); // Update Data
Route::get('/parent/profile/delete/{id}','PProfileController@destroy'); // Delete Data
Route::get('/parent/profile/view','PProfileController@view'); // View Report
Route::get('/parent/profile/pdf','PProfileController@pdf'); // Download PDF
Route::get('/parent/profile/excel','PProfileController@excel'); // Download Excel

// Parent Page -- Log
Route::get('/parent/log','PLogController@index'); // List User
Route::get('/parent/log/create','PLogController@create'); // Form Create
Route::post('/parent/log/create','PLogController@store'); // Insert Data
Route::get('/parent/log/edit/{id}','PLogController@edit'); // Form Edit
Route::post('/parent/log/update/{id}','PLogController@update'); // Update Data
Route::get('/parent/log/delete/{id}','PLogController@destroy'); // Delete Data
Route::get('/parent/log/view','PLogController@view');     // View Report
Route::get('/parent/log/pdf','PLogController@pdf'); // Download PDF
Route::get('/parent/log/excel','PLogController@excel'); // Download Excel