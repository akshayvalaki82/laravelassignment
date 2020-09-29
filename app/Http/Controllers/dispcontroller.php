<?php

namespace App\Http\Controllers;

use App\Models\disp;
use Illuminate\Http\Request;

class dispcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\disp  $disp
     * @return \Illuminate\Http\Response
     */
    public function show(disp $disp)
    {
        // echo "kjdsn";
        $disp = disp::all();
        // echo $disp;
        return view('cats/disp', compact('disp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disp  $disp
     * @return \Illuminate\Http\Response
     */
    public function edit(disp $disp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\disp  $disp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disp $disp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\disp  $disp
     * @return \Illuminate\Http\Response
     */
    public function destroy(disp $disp)
    {
        //
    }
}
