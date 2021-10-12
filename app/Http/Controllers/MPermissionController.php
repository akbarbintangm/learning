<?php

namespace App\Http\Controllers;

use App\Models\MPermissionModel;
use Illuminate\Http\Request;

class MPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MPermissionModel  $mPermissionModel
     * @return \Illuminate\Http\Response
     */
    public function show(MPermissionModel $mPermissionModel)
    {
        return view('admin/permission.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MPermissionModel  $mPermissionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MPermissionModel $mPermissionModel)
    {
        return view('admin/permission.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MPermissionModel  $mPermissionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MPermissionModel $mPermissionModel)
    {
        return view('admin/permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MPermissionModel  $mPermissionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MPermissionModel $mPermissionModel)
    {
        return view('admin/permission.index');
    }
    public function pdf(MLogModel $mLogModel)
    {
        return view('admin/permission.pdf');
    }

    public function excel(MLogModel $mLogModel)
    {
        return view('admin/permission.excel');
    }

    public function report(MLogModel $mLogModel)
    {
        return view('admin/permission.report');
    }
}
