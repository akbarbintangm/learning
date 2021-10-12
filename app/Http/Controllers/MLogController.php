<?php

namespace App\Http\Controllers;

use App\Models\MLogModel;
use Illuminate\Http\Request;

class MLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/log.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/log.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/log.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MLogModel  $mLogModel
     * @return \Illuminate\Http\Response
     */
    public function show(MLogModel $mLogModel)
    {
        return view('admin/log.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MLogModel  $mLogModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MLogModel $mLogModel)
    {
        return view('admin/log.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MLogModel  $mLogModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MLogModel $mLogModel)
    {
        return view('admin/log.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MLogModel  $mLogModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MLogModel $mLogModel)
    {
        return view('admin/log.index');
    }
    
    public function pdf(MLogModel $mLogModel)
    {
        return view('admin/log.pdf');
    }
    
    public function excel(MLogModel $mLogModel)
    {
        return view('admin/log.excel');
    }
    
    public function report(MLogModel $mLogModel)
    {
        return view('admin/log.report');
    }
}
