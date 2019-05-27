<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\KataController;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\RuleController;

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
        $data[0] = $string;
        if(str_word_count($string) < 4){
            return "Error";
        }

        $check_rule = RuleController::checkrule($data[0]);

        if( $kata_pertama == false ){
            return ('wrong rule');
        }

        return view("resultinput")->with('data',$data);

    }
}
