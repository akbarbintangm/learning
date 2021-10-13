<?php

namespace App\Http\Controllers;

use App\Models\SDashboardModel;
use Illuminate\Http\Request;

class SDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SDashboardModel  $sDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function show(SDashboardModel $sDashboardModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SDashboardModel  $sDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SDashboardModel $sDashboardModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SDashboardModel  $sDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SDashboardModel $sDashboardModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SDashboardModel  $sDashboardModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SDashboardModel $sDashboardModel)
    {
        //
    }
}
