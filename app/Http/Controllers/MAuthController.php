<?php

namespace App\Http\Controllers;

//use App\Models\MAuthModel;
use Illuminate\Http\Request;

class MAuthController extends Controller
{
    public function login()
    {
        return view('admin/login.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/login.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin/login.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MAuthModel  $mAuthModel
     * @return \Illuminate\Http\Response
     */
    public function show(MAuthModel $mAuthModel)
    {
        return view('admin/login.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MAuthModel  $mAuthModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MAuthModel $mAuthModel)
    {
        return view('admin/login.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MAuthModel  $mAuthModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MAuthModel $mAuthModel)
    {
        return view('admin/login.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MAuthModel  $mAuthModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MAuthModel $mAuthModel)
    {
        return view('admin/login.index');
    }
    
    public function pdf(MAuthModel $mAuthModel)
    {
        return view('admin/login.pdf');
    }
    
    public function excel(MAuthModel $mAuthModel)
    {
        return view('admin/login.excel');
    }
    
    public function report(MAuthModel $mAuthModel)
    {
        return view('admin/login.report');
    }
}
