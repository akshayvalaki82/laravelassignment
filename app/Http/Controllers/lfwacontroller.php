<?php

namespace App\Http\Controllers;

use App\Models\lfwa;
use Illuminate\Http\Request;

class lfwacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cats/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats/catname');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "djjad";
        // return $request->all();
         $lfwa = new lfwa;
         $lfwa->cname = request('cname');
        //  echo $lfwa->cname;
         $lfwa->save();
        // DB::table('productdet')->insert(
        //     ['cname' => 'kjffdjjn', 'votes' => 0]
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lfwa  $lfwa
     * @return \Illuminate\Http\Response
     */
    public function show(lfwa $lfwa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lfwa  $lfwa
     * @return \Illuminate\Http\Response
     */
    public function edit(lfwa $lfwa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lfwa  $lfwa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lfwa $lfwa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lfwa  $lfwa
     * @return \Illuminate\Http\Response
     */
    public function destroy(lfwa $lfwa)
    {
        //
    }
}
