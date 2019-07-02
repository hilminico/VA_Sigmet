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
    
    public function result(){

        return view('resultinput');    

    }

    public function inputhandling(Request $request){

        $command = strtolower($request->command);

        $scanner = RuleController::scanner($command);

        $parser = RuleController::parser($scanner,$command);

        $check_tail = RuleController::check_tail_att($parser);

        $check_rule = RuleController::check_rule_tree($check_tail);

        $check_rule[6] = VAController::index();

        $evaluator = RuleController::evaluator($check_rule);

        dd($evaluator);

        return view("resultinput")->with('data',$evaluator);
    }
}
