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
    return view('listings',
    ['heading'=>'Lastest Listing',
'listings'=>[
    [
        'id'=>1,
        'title'=>'frontend',
        'description'=>'Conduct user research to understand user needs, behaviors, and pain points.
        Create user personas, user flows, and journey maps to inform design decisions.
        Design wireframes, prototypes, and visual assets for web and mobile applications.
        Collaborate with developers to ensure the implementation of designs meets usability and visual standards.
        Iterate on designs based on user feedback, usability testing, and data analysis.
        Stay up-to-date with industry trends and best practices in UI/UX design.
        Contribute to the development and maintenance of design systems and style guides.'
    ],
    [
        'id'=>2,
        'title'=>'ui/ux',
        'description'=>'Conduct user research to understand user needs, behaviors, and pain points.
        Create user personas, user flows, and journey maps to inform design decisions.
        Design wireframes, prototypes, and visual assets for web and mobile applications.
        Collaborate with developers to ensure the implementation of designs meets usability and visual standards.
        Iterate on designs based on user feedback, usability testing, and data analysis.
        Stay up-to-date with industry trends and best practices in UI/UX design.
        Contribute to the development and maintenance of design systems and style guides.'
    ]

]]);
});
// Route::get ('post/{id}',function($id){
//     return response('post'.$id);
// });
// route::delete('post/{id}',function ($id){
//     return response("delete post with id:".$id);
// });

// route::patch('post/{id}',function($id){
//     return response("update post with id:".$id);
// });
// route::put ('post/{$id}',function($id){
//     return response("edit post with id:".$id);
// })->where ('id','[0-9]+');

// route::get('/search',function(Request $request){
//     return $request->name.''.$request->city;

// });