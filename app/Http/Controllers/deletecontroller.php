<?php

namespace App\Http\Controllers;

use App\Models\delete;
use Illuminate\Http\Request;
use DB;

class deletecontroller extends Controller
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
     * @param  \App\Models\delete  $delete
     * @return \Illuminate\Http\Response
     */
    public function show(delete $delete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delete  $delete
     * @return \Illuminate\Http\Response
     */
    public function edit(delete $delete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delete  $delete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delete $delete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delete  $delete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('productdet')->where('id',$id)->delete();
        // DB::table('product')->where('id',$id)->delete();
        // DB::table('product')->where('votes', '>', 100)->delete();
        return redirect('/disp');
        // return view('cats/delete', compact('id'));
        echo "jsn";
    }
}
