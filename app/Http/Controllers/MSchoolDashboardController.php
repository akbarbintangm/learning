<?php

namespace App\Http\Controllers;

use App\Models\MSchoolDashboardModel;
use Illuminate\Http\Request;

class MSchoolDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/school/detail/school_dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/school/detail/school_dashboard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/school/detail/school_dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSchoolDashboardModel  $mSchoolDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSchoolDashboardModel  $mSchoolDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSchoolDashboardModel  $mSchoolDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSchoolDashboardModel  $mSchoolDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.index');
    }
    public function pdf(MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.pdf');
    }

    public function excel(MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.excel');
    }

    public function report(MSchoolDashboardModel $mSchoolDashboardModel)
    {
        return view('admin/school/detail/school_dashboard.report');
    }
}
