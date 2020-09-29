<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catcontroller;
use App\Http\Controllers\lfwacontroller;
use App\Http\Controllers\dispcontroller;
use App\Http\Controllers\deletecontroller;
use App\Http\Controllers\editcontroller;
use App\Http\Controllers\updatecontroller;
use App\Http\Controllers\productcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aaa', function () {
    return view('cats/layout');
});
// Route::get('/', function () {
//     return view('/cats/xyz');
// });

Route::get('indx',[catcontroller::class,'index']);
// Route::get("indx", 'lfwacontroller@index');
Route::get('catname',[catcontroller::class,'create']);
Route::post('create',[catcontroller::class,'store']);
Route::get('disp',[dispcontroller::class,'show']);
Route::get('deletecontroller/{id}',[deletecontroller::class,'destroy']);
Route::get('editcontroller/{id}',[editcontroller::class,'update']);
Route::post('/submit/{id}',[updatecontroller::class,'store']);

Route::get('product',[productcontroller::class,'create']);
Route::post('/submit',[productcontroller::class,'store']);
Route::get('/productdisp',[productcontroller::class,'show']);
Route::get('/delete/{id}',[productcontroller::class,'destroy']);
Route::get('/edit/{id}',[productcontroller::class,'edit']);
Route::post('/update/{id}',[productcontroller::class,'update']);





// Route::get('indx',[lfwacontroller::class,'index']);
// Route::get('catname',[lfwacontroller::class,'create']);
// Route::post('create',[lfwacontroller::class,'store']);
