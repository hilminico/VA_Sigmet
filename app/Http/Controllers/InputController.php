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

        $scanner = RuleController::scanner($command);

        $parser = RuleController::parser($scanner,$command);

        if(str_word_count($string) < 3){
            return "Error";
        }

        $check_rule = RuleController::checkrule($data[0]);

        if( $kata_pertama == false ){
            return ('wrong rule');
        }

        return view("resultinput")->with('data',$data);

    }
}
