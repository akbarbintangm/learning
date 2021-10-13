<?php

namespace App\Http\Controllers;

use App\Models\MSchoolInfoModel;
use Illuminate\Http\Request;

class MSchoolInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolInfoModel  $mSchoolInfoModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolInfoModel  $mSchoolInfoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolInfoModel  $mSchoolInfoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolInfoModel  $mSchoolInfoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.index');
    }

    public function pdf(MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.pdf');
    }

    public function excel(MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.excel');
    }

    public function report(MSchoolInfoModel $mSchoolInfoModel)
    {
        return view('admin/school/detail/school_info.report');
    }
}
