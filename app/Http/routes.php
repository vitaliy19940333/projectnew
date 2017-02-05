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


#Страница Домашняя
Route::get("/",[
    'uses' => 'admin\AboutController@home'
]);



#Страница Домашняя
Route::get("/home",[
    'uses' => 'admin\AboutController@home',
    'as'=> 'home'
]);



#Страница О нас
Route::get("/about",[
    'uses' => 'admin\AboutController@about',
    'as'=> 'about'
]);


#Страница Статьи
Route::get("/articles",[
    'uses' => 'admin\AboutController@articles',
    'as'=> 'articles'
]);


#Страница Статья
Route::get("/article/{id}",[
    'uses' => 'admin\AboutController@article',
    'as'=> 'article'
]);

#Добавлении статьи
Route::match(['post','get','put'],'/articl/add',[
    'uses' => "admin\AboutController@addArticle",
    'as' => 'addarticledsffsd'
]);


Route::match(['get','post'],'/contact',[
    'uses' => "ContactController@Index",
    'as' => "contact"
]);