<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeCocntroller extends Controller
{
    public function show($massage){
        echo "<h1>$massage</h1>";
        echo __METHOD__;
    }

    public  function article(){
        echo "Article";
    }

    public function datee(){
        echo "<pre>";
        print_r($_POST);
    }
}
