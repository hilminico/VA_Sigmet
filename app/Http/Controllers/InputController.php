<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\KataController;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){

        return view('forminput');    

    }

    public function inputhandling(Request $request){

        $command = strtolower($request->command);

        $string = str_replace(' ', '-', $command); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars
        $string = str_replace('-', ' ', $command); // Replaces all spaces with hyphens.

        if(str_word_count($string) <= 5){
            return "Error";
        }

        $katatanya = KataController::katatanya($command);

    }
}
