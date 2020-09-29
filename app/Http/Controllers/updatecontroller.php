<?php

namespace App\Http\Controllers;

use App\Models\update;
use Illuminate\Http\Request;

class updatecontroller extends Controller
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
    public function store($id,Request $request)
    {
        // $validator= validator::make($rew)    

        echo $id;
        $update = update::find($id);
        $update->cname = $request->cname;
        $update->save();
        return redirect('/disp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\update  $update
     * @return \Illuminate\Http\Response
     */
    public function show(update $update)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\update  $update
     * @return \Illuminate\Http\Response
     */
    public function edit(update $update)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\update  $update
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, update $update)
    {
        // echo "kjhnsj";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy(update $update)
    {
        //
    }
}
