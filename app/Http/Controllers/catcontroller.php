<?php

namespace App\Http\Controllers;

use App\Models\cat;
use Illuminate\Http\Request;
use Validator;

class catcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // // echo "abcdefghi";
        // // $name="akshay";
        // // return view('cats/index', ['name'=> $name]);
        // return view('cats/index');
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
        $request->validate([
            // 'title' => 'required|unique:posts|max:255',
            'cname' => 'required|max:10|alpha',
         ]);
        $cat = new cat;
        $cat->cname = request('cname');
        $cat->save();

        return redirect('/catname');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(cat $cat)
    {
        //
    }
}
