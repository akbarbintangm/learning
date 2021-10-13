<?php

namespace App\Http\Controllers;

use App\Models\SCourseModel;
use Illuminate\Http\Request;

class SCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.course.index');
    }

    public function detail()
    {
        return view('student.course.detail');
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
     * @param  \App\Models\SCourseModel  $sCourseModel
     * @return \Illuminate\Http\Response
     */
    public function show(SCourseModel $sCourseModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SCourseModel  $sCourseModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SCourseModel $sCourseModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SCourseModel  $sCourseModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SCourseModel $sCourseModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SCourseModel  $sCourseModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SCourseModel $sCourseModel)
    {
        //
    }
}
