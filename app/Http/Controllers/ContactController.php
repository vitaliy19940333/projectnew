<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public  function Index(Request $request){
        if($request->isMethod('post'))
        {
            $request->flash();
            return redirect()->route('contact');
        }
        return view('contact');
    }
}
