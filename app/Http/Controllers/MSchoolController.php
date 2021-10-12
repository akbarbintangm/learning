<?php

namespace App\Http\Controllers;

use App\Models\MSchoolModel;
use Illuminate\Http\Request;

class MSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolModel  $mSchoolModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolModel $mSchoolModel)
    {
        return view('admin/school.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolModel  $mSchoolModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolModel $mSchoolModel)
    {
        return view('admin/school.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolModel  $mSchoolModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolModel $mSchoolModel)
    {
        return view('admin/school.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolModel  $mSchoolModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolModel $mSchoolModel)
    {
        return view('admin/school.index');
    }
    public function pdf(MSchoolModel $mSchoolModel)
    {
        return view('admin/school.pdf');
    }

    public function excel(MSchoolModel $mSchoolModel)
    {
        return view('admin/school.excel');
    }

    public function report(MSchoolModel $mSchoolModel)
    {
        return view('admin/school.report');
    }
}
