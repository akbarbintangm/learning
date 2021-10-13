<?php

namespace App\Http\Controllers;

use App\Models\SMaterialTaskModel;
use Illuminate\Http\Request;

class SMaterialTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.material-task.index');
    }

    public function detail()
    {
        return view('student.material-task.detail');
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
     * @param  \App\Models\SMaterialTaskModel  $sMaterialTaskModel
     * @return \Illuminate\Http\Response
     */
    public function show(SMaterialTaskModel $sMaterialTaskModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SMaterialTaskModel  $sMaterialTaskModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SMaterialTaskModel $sMaterialTaskModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SMaterialTaskModel  $sMaterialTaskModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SMaterialTaskModel $sMaterialTaskModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SMaterialTaskModel  $sMaterialTaskModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SMaterialTaskModel $sMaterialTaskModel)
    {
        //
    }
}
