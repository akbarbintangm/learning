<?php

namespace App\Http\Controllers;

use App\Models\SScoreModel;
use Illuminate\Http\Request;

class SScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.score.index');
    }

    public function detail()
    {
        return view('student.score.detail');
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
     * @param  \App\Models\SScoreModel  $sScoreModel
     * @return \Illuminate\Http\Response
     */
    public function show(SScoreModel $sScoreModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SScoreModel  $sScoreModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SScoreModel $sScoreModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SScoreModel  $sScoreModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SScoreModel $sScoreModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SScoreModel  $sScoreModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SScoreModel $sScoreModel)
    {
        //
    }
}
