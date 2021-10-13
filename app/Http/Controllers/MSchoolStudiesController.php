<?php

namespace App\Http\Controllers;

use App\Models\MSchoolStudiesModel;
use Illuminate\Http\Request;

class MSchoolStudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_studies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_studies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolStudiesModel  $mSchoolStudiesModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolStudiesModel  $mSchoolStudiesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolStudiesModel  $mSchoolStudiesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolStudiesModel  $mSchoolStudiesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.index');
    }

    public function pdf(MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.pdf');
    }

    public function excel(MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.excel');
    }

    public function report(MSchoolStudiesModel $mSchoolStudiesModel)
    {
        return view('admin/school/detail/school_studies.report');
    }
}
