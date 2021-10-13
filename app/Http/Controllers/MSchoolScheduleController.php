<?php

namespace App\Http\Controllers;

use App\Models\MSchoolScheduleModel;
use Illuminate\Http\Request;

class MSchoolScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolScheduleModel  $mSchoolScheduleModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolScheduleModel  $mSchoolScheduleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolScheduleModel  $mSchoolScheduleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolScheduleModel  $mSchoolScheduleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.index');
    }

    public function pdf(MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.pdf');
    }

    public function excel(MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.excel');
    }

    public function report(MSchoolScheduleModel $mSchoolScheduleModel)
    {
        return view('admin/school/detail/school_schedule.report');
    }
}
