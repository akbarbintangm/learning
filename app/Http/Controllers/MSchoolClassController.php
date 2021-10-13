<?php

namespace App\Http\Controllers;

use App\Models\MSchoolClassModel;
use Illuminate\Http\Request;

class MSchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_class.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_class.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_class.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolClassModel  $mSchoolClassModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolClassModel  $mSchoolClassModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolClassModel  $mSchoolClassModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolClassModel  $mSchoolClassModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.index');
    }

    public function pdf(MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.pdf');
    }

    public function excel(MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.excel');
    }

    public function report(MSchoolClassModel $mSchoolClassModel)
    {
        return view('admin/school/detail/school_class.report');
    }
}
