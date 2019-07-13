<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Finite\StateMachine\StateMachine;
use Finite\State\State;
use Finite\State\StateInterface;
use Finite\Loader\ArrayLoader;
use App\RuleTree;

class RuleController extends Controller
{
    public static function scanner($string){
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
        $string = str_replace('-', ' ', $string); 

        $string_explode = explode(' ',$string);

        for($i=0;$i < sizeof($string_explode); $i++){
            $katatanya_dapatdiabaikan = KataController::katatanya_dapatdiabaikan($string_explode[$i]);
            $kataperintah_dapatdiabaikan = KataController::kataperintah_dapatdiabaikan($string_explode[$i]);
            $katapelengkap_dapatdiabaikan = KataController::katapelengkap_dapatdiabaikan($string_explode[$i]);
            $kataketerangan_dapatdiabaikan = KataController::kataketerangan_dapatdiabaikan($string_explode[$i]);
            $katatoken_attribut = KataController::katatoken_attribut($string_explode[$i]);
            $katatoken_operator = KataController::katatoken_operator($string_explode[$i]);
            $katatoken_katasambung = KataController::katatoken_katasambung($string_explode[$i]);
            $katatoken_operatornegasi = KataController::katatoken_operatornegasi($string_explode[$i]);
            if($katatanya_dapatdiabaikan == true){
                $parser[$i] = "<katatanya_dapat_diabaikan>";
            }
            elseif($kataperintah_dapatdiabaikan == true){
                $parser[$i] = "<kataperintah_dapat_diabaikan>";
            }
            elseif($katapelengkap_dapatdiabaikan == true){
                $parser[$i] = "<katapelengkap_dapatdiabaikan>";
            }
            elseif($kataketerangan_dapatdiabaikan == true){
                $parser[$i] = "<kataketerangan_dapatdiabaikan>";
            }
            elseif($katatoken_attribut == true){
                $parser[$i] = "<katatoken_attribut>";
            }
            elseif($katatoken_operator == true){
                $parser[$i] = "<katatoken_operator>";
            }
            elseif($katatoken_katasambung == true){
                $parser[$i] = "<katatoken_katasambung>";
            }
            elseif($katatoken_operatornegasi == true){
                $parser[$i] = "<katatoken_operatornegasi>";
            }
            else{
                $parser[$i] = "<data>";
            }            
        }
        
        return implode(' ',$parser);
    }

    public static function parser($scanner,$command){
        $arr[0] = explode(' ',$scanner);
        $arr[1] = explode(' ',$command);
        for($i=0 ; $i < sizeof($arr[0]) ; $i++){
            if( $arr[0][$i] == "<katatoken_attribut>"){
                $tipe[] = $arr[0][$i];
                $token[] = $arr[1][$i];
            }
            if( $arr[0][$i] == "<katatoken_operator>"){
                $tipe[] = $arr[0][$i];
                $token[] = $arr[1][$i];
            }
            if( $arr[0][$i] == "<katatoken_katasambung>"){
                $tipe[] = $arr[0][$i];
                $token[] = $arr[1][$i];
            }
            if( $arr[0][$i] == "<katatoken_operatornegasi>"){
                $tipe[] = $arr[0][$i];
                $token[] = $arr[1][$i];
            }
            if( $arr[0][$i] == "<data>"){
                $tipe[] = $arr[0][$i];
                $token[] = $arr[1][$i];
            }
        }
        $arr[2]= $tipe;
        $arr[3]= $token;

        return $arr;

    }

    public static function checkrule($string){
        $explode_string = explode(' ',$string);

        $length = sizeof($explode_string);

        if($length == 4){

            $pattern = preg_replace('/[a-z]/', '', $string);

        }
        elseif($length == 5){

        }
        if($explode_string[0] == 'tampilkan'){
            for($i=1;$i <= sizeof($explode_string);$i++){

            }

        }
    }

    public function check_kondisi_field($sub_str){
        $dict = array('tanggal','wilayah','seluruh','field');
        for($z=0 ; $z < sizeof($dict);$z++){
            if($sub_str == $dict[$z]){
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function check_kondisi(){

    }

    public function check_data_tables($sub_str){
        $dict = array('va','terkini','info');
        for($y=0 ; $y < sizeof($dict);$y++){
            if($sub_str == $dict[$y]){
                return true;
            }
            else{
                return false;
            }
        }

    }

    public static function check_tail_att($arr){
        $merge_string = implode(' ',$arr[2]);
        $arr[4] = str_replace("<katatoken_attribut> <data>","<fkondisi>",$merge_string);
        $arr[4] = explode(' ',$arr[4]);
        return $arr;
    }


    public static function check_rule_tree($param){
    $document     = new RuleTree;
    $stateMachine = new StateMachine;
    $loader       = new ArrayLoader([
        'class'  => 'RuleTree',
        'states' => [
            'S'    => ['type' => 'initial', 'properties' => []],
            'A' => ['type' => 'final',  'properties' => []],
            'B' => ['type' => 'normal',   'properties' => []],
            'C'  => ['type' => 'normal',   'properties' => []],
            'D'  => ['type' => 'normal',   'properties' => []],
            'E'  => ['type' => 'final',   'properties' => []],
            'F'  => ['type' => 'normal',   'properties' => []],
            'G'  => ['type' => 'normal',   'properties' => []],
        ],
        'transitions' => [
            '<katatoken_attribut>' => ['from' => ['S','B'],    'to' => 'A'],
            '<katatoken_katasambung>'  => ['from' => 'A', 'to' => 'B'],
            '<katatoken_katasambung1>'  => ['from' => 'E', 'to' => 'G'],
            '<fkondisi>' => ['from' => ['A'],    'to' => 'C'],
            'katatoken_operatornegasi'  => ['from' => ['C'], 'to' => 'D'],
            '<data>'  => ['from' => ['D'], 'to' => 'E'],
            '<katatoken_operator>' => ['from' => ['C'],    'to' => 'F'],
            '<data1>'  => ['from' => ['F'], 'to' => 'E'],
            '<data2>'  => ['from' => ['C'], 'to' => 'E'],
            '<fkondisi>'  => ['from' => ['G'], 'to' => 'C'],
        ]
    ]);

    
    $loader->load($stateMachine);
    $stateMachine->setObject($document);
    $stateMachine->initialize();
    $current_state = $stateMachine->getCurrentState();
    foreach($param[4] as $par){
        $check = $stateMachine->can($par);
        if($check == true){
            $current_state = $stateMachine->apply($par);
        }
        else{
            return "Rule Salah";
        }
    }

    $param[5] = $stateMachine->getCurrentState();
    return $param;
    }

    public static function evaluator($param){
        // dd($param);
        $check = $param[5];
        $data_va = $param[6];
        $count = array_count_values($param[4]);
        // dd($param[3]);
        if($check == 'A'){
            $i=0;
        }
        dd($param[7]);
        return $param;
    }
}
