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

    public static function kata($kata){

    }
}
