<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use DB;

class productcontroller extends Controller
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
        $scategory = DB::table('productdet')
                    ->select('cname','id')
                    ->get();
        //  echo $scategory;
        return view('cats/product', compact('scategory'));           
        // return view('cats/disp', compact('disp'));
        //  return view('cats/product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // oecho "kjde";
         $request->validate([
            // 'title' => 'required|unique:posts|max:255',
            'pname' => 'required|max:10|alpha',
            'pprice' => 'required|numeric',
            'image' => 'required|image|max:2000',
            'scategory' => 'required|not_in:0',
            // 'description' => 'required',
         ]);
         $product = new product;
         $product->pname = request('pname');
         $product->pprice = request('pprice');
         $product->scategory = request('scategory');
         if($request->hasfile('image'))
         {
             $file=$request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
            //  echo $filename;
             $file->move('upload/img/',$filename);
             $product->file = $filename;
         }    
        //  $x =$product->pname;
        //  echo $x;
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $product = product::all();
        // echo $product;
        return view('cats/productdisp',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id,product $product)
    {
        // echo $id;
        $scategory = DB::table('productdet')
                    ->select('cname','id')
                    ->get();
        $row = DB::table('product')->where('id', $id)->first();
        return view('/cats/editproduct', compact('row','id','scategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, product $product)
    {
        // echo $id;
        $product = product::find($id);
        $product->pname = request('pname');
        $x = $product->pname;
        // echo $x;
        $product->pprice = request('pprice');
        $product->scategory = request('scategory');
        if($request->hasfile('image'))
         {
             $file=$request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
            //  echo $filename;
             $file->move('upload/img/',$filename);
             $product->file = $filename;
         }    
        $product->save();
        return redirect('/productdisp');
        // echo "1111updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,product $product)
    {
        //echo $id;
        //echo "dlkds";
        DB::table('product')->where('id',$id)->delete();
        return redirect('/productdisp');
        
    }
}
