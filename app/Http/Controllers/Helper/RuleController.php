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
                dd('error');
            }
        }
        dd($parser);


    }

    public static function parser($string){
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
