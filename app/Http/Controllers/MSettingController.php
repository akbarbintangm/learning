<?php

namespace App\Http\Controllers;

use App\Models\MSettingModel;
use Illuminate\Http\Request;

class MSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/setting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MSettingModel  $mSettingModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSettingModel $mSettingModel)
    {
        return view('admin/setting.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSettingModel  $mSettingModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSettingModel $mSettingModel)
    {
        return view('admin/setting.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSettingModel  $mSettingModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSettingModel $mSettingModel)
    {
        return view('admin/setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSettingModel  $mSettingModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSettingModel $mSettingModel)
    {
        return view('admin/setting.index');
    }

    public function pdf(MSettingModel $mSettingModel)
    {
        return view('admin/setting.pdf');
    }

    public function excel(MSettingModel $mSettingModel)
    {
        return view('admin/setting.excel');
    }

    public function report(MSettingModel $mSettingModel)
    {
        return view('admin/setting.report');
    }
}
