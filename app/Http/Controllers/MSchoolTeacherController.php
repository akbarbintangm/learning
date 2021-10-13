<?php

namespace App\Http\Controllers;

use App\Models\MSchoolTeacherModel;
use Illuminate\Http\Request;

class MSchoolTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolTeacherModel  $mSchoolTeacherModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolTeacherModel  $mSchoolTeacherModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolTeacherModel  $mSchoolTeacherModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolTeacherModel  $mSchoolTeacherModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.index');
    }

    public function pdf(MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.pdf');
    }

    public function excel(MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.excel');
    }

    public function report(MSchoolTeacherModel $mSchoolTeacherModel)
    {
        return view('admin/school/detail/school_teacher.report');
    }
}
