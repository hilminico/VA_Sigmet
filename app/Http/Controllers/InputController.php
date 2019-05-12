<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){

        return view('forminput');    

    }

    public function inputhandling(Request $request){

        dd($request->command);

    }
}
