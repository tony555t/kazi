<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get ('post/{id}',function($id){
    return response('post'.$id);
});
route::delete('post/{id}',function ($id){
    return response("delete post with id:".$id);
});

route::patch('post/{id}',function($id){
    return response("update post with id:".$id);
});
route::put ('post/{$id}',function($id){
    return response("edit post with id:".$id);
})->where ('id','[0-9]+');

route::get('/search',function(Request $request){
    dd($request);

});