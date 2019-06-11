<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KataController extends Controller
{
    public static function katatanya_dapatdiabaikan($katatanya){
        $dict_kata_tanya = array('dimana','apa','apa saja');
        $check = in_array($katatanya,$dict_kata_tanya) ;
        return $check;
    }

    public static function kataperintah_dapatdiabaikan($kataperintah){
        $dict_kata_perintah = array('tampilkan','tampil','cari');
        $check = in_array($kataperintah,$dict_kata_perintah) ;
        return $check;
    }

    public static function katapelengkap_dapatdiabaikan($katapelengkap){
        $dict_kata_pelengkap = array('saja','daftar','ditawarkan','gunung');
        $check = in_array($katapelengkap,$dict_kata_pelengkap) ;
        return $check;
    }

    public static function kataketerangan_dapatdiabaikan($kataketerangan){
        $dict_kata_keterangan = array('di','pada','dari','yang','oleh','dengan');
        $check = in_array($kataketerangan,$dict_kata_keterangan) ;
        return $check;
    }

    public static function katatoken_attribut($att){
        $dict_att = array( 'fir' , 'sequence_id' , 'validity' , 'info','va','cuaca');
        $check = in_array($att,$dict_att) ;
        return $check;
    }

    public static function katatoken_operator($op){
        $dict_op = array( 'sesudah' , 'sebelum' , 'lebih');
        $check = in_array($op,$dict_op) ;
        return $check;
    }

    public static function katatoken_katasambung($katasambung){
        $dict_katasambung = array( 'dan');
        $check = in_array($katasambung,$dict_katasambung) ;
        return $check;
    }

    public static function katatoken_operatornegasi($operatornegasi){
        $dict_katanegasi = array( 'bukan','tidak','selain');
        $check = in_array($operatornegasi,$dict_katanegasi) ;
        return $check;
    }
}
