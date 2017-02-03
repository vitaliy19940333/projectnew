<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Главная
Route::get("/",['as' => 'her',function(){
    return view("welcome");
}]);

Route::get("/home",[
                    "uses" => "admin\AboutController@home",
                    "as" => "home"
]);

Route::get("/about",[
    "uses" => "admin\AboutController@about",
    "as" => "about"
]);


Route::get("/Articles",[
    "uses" => "admin\AboutController@articles",
    "as" => "articles"
]);

Route::get("/Article",[
    "uses" => "admin\AboutController@article",
    "as" => "article"
]);