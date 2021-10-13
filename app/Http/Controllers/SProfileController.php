<?php

namespace App\Http\Controllers;

use App\Models\SProfileModel;
use Illuminate\Http\Request;

class SProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.profile.index');
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
     * @param  \App\Models\SProfileModel  $sProfileModel
     * @return \Illuminate\Http\Response
     */
    public function show(SProfileModel $sProfileModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SProfileModel  $sProfileModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SProfileModel $sProfileModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SProfileModel  $sProfileModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SProfileModel $sProfileModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SProfileModel  $sProfileModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SProfileModel $sProfileModel)
    {
        //
    }
}
