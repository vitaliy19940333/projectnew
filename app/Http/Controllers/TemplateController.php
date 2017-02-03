<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TemplateController extends Controller
{
    public  function show(){
        $data = [
            "title" => "MySite",
            "hello" =>"Vitala"
        ];
        return view("template")->with($data);
    }
}
