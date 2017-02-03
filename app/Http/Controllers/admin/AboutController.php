<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function home()
    {
        return view("template");
    }

    public  function about(){
        return view("template");
    }

    public  function articles(){
        return view("template");
    }

    public  function article(){
        return view("template");
    }
}
