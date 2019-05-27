<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KataController extends Controller
{
    public static function katatanya($katatanya){
        if($katatanya == "berapa"){
            return true;
        }
        elseif($katatanya == "dimana"){
            return true;
        }
        elseif($katatanya == "kapan"){
            return true;
        }
        elseif($katatanya == "tampilkan"){
            return true;
        }
        return false;
    }

    public static function attribut($att){
        $dict_att = array( 'fir' , 'sequence_id' , 'validity' , 'info');
        $check = in_array($att,$dict_att) ;
        return $check;
    }

    public static function kata($kata){
        if($kata == "info"){
            return true;
        }
        elseif($kata == "di"){
            return true;
        }
        elseif($kata == "terjadi"){
            return true;
        }
        elseif($kata == "dari"){
            return true;
        }
        elseif($kata == "field"){
            return true;
        }
        elseif($kata == "yang"){
            return true;
        }
        elseif($kata == "posisi"){
            return true;
        }
        elseif($kata == "pada"){
            return true;
        }
        elseif($kata == "diantara"){
            return true;
        }
        elseif($kata == "gempa"){
            return true;
        }
        elseif($kata == "terkini"){
            return true;
        }
        elseif($kata == "bumi"){
            return true;
        }
        return false;
    }    
}
