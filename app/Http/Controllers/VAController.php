<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Va;
use App\Http\Controllers\Helper\ParseSigmet;

use Goutte;

class VAController extends Controller
{
    public function index(){
        $data = array();
        $crawler = Goutte::request('GET', 'http://www.bom.gov.au/aviation/volcanic-ash/au-va-sigmet.shtml');
        $crawler->filter('.middle-column-round .product')->each(function ($node) {
            $check = Va::where('dataraw', '=', $node->text())->exists();
            if(!$check){
                $va = Va::create([
                    'dataraw' => $node->text()
                ]);
            }else{
                return false;
            }
        });
        $getdata = Va::get();

        $parsedata = ParseSigmet::parsedata($getdata);

        $string = "AGGG";
        $hasil = ParseSigmet::fir($string);
        dd($hasil);

        dd($parsedata);
        return view('welcome')->with('getdata',$getdata);    
    }
}
