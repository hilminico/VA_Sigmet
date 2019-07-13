<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\KataController;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\RuleController;
use App\slice_va;
use DB;

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
        
        if($check_rule == 'Rule Salah'){
            return view("resultinput")->with('data',$check_rule);
        }

        $check_rule[6] = VAController::index();
        
        $i=0;
        foreach($check_rule[6] as $dt){
            unset($key);
            $check_exist = DB::table('slice va')->where('id',$i)->exists();
            if(!($check_exist)){
                foreach($dt[5] as $key => $val){
                    $in_arr['id'] = $i;
                    $in_arr[$key] = $val;
                }
            DB::table('slice va')->insert($in_arr);
            }
            $i++;
        }
        $check_rule[6] = DB::table('slice va')->get();        
        $evaluator = RuleController::evaluator($check_rule);
    dd($evaluator);
        return view("resultinput")->with('data',$evaluator);
    }
}
