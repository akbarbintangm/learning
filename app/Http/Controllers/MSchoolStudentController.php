<?php

namespace App\Http\Controllers;

use App\Models\MSchoolStudentModel;
use Illuminate\Http\Request;

class MSchoolStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolStudentModel  $mSchoolStudentModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolStudentModel  $mSchoolStudentModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolStudentModel  $mSchoolStudentModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolStudentModel  $mSchoolStudentModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.index');
    }

    public function pdf(MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.pdf');
    }

    public function excel(MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.excel');
    }

    public function report(MSchoolStudentModel $mSchoolStudentModel)
    {
        return view('admin/school/detail/school_student.report');
    }
}
