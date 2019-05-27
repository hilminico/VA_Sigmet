<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuleController extends Controller
{
    public static function scanner($string){
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
        $string = str_replace('-', ' ', $string); 

        $string_explode = explode(' ',$string);
        return $string_explode;
    }

    public static function parser($string){
        for($i=0;$i < sizeof($string); $i++){
            $check_attribut = KataController::attribut($string[$i]);
            if($check_attribut == true){
                $parser[$i] = true;
            }else{
                $parser[$i] = false;
            }
        }
        dd($parser);
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


}
