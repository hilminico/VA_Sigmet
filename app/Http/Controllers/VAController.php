<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Va;
use App\Http\Controllers\Helper\ParseSigmet;
use App\Http\Controllers\Helper\IataCodes;
use Goutte;

class VAController extends Controller
{
    public function index(){
        $data = array();
        $response = "";
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
        $index = 0 ;
        foreach($getdata as $data){

            $parsedata[] = ParseSigmet::parsedata($data->dataraw); //preprosessing 

            $parsedata[$index]['1'] = $data->dataraw;            
    
            $parsedata[$index]['2'] = explode(" ", $parsedata[$index]['0']);

            for ($i=0 ; $i < count($parsedata[$index]['2']);$i++){

                $jam = ParseSigmet::ReceivedAt($parsedata[$index]['2'][$i]);
                if(!(is_null($jam))){
                    $parsedata[$index]['3'][$i] = $jam;
                }
                else{
                    $parsedata[$index]['3'][$i] = null;
                }

                $date = ParseSigmet::date($parsedata[$index]['2'][$i]);
                if(!(is_null($date))){
                    $parsedata[$index]['3'][$i] = $date;
                }

                $fir = ParseSigmet::FIR($parsedata[$index]['2'][$i]);
                if(!(is_null($fir))){
                    $parsedata[$index]['3'][$i] = 'di '.$fir;
                }

                $org = ParseSigmet::OriginatingOffice($parsedata[$index]['2'][$i]);
                if(!(is_null($org))){
                    $parsedata[$index]['3'][$i] = $org;
                }

                $singkatan = ParseSigmet::singkatan($parsedata[$index]['2'][$i]);

                if(!(is_null($singkatan))){
                    $parsedata[$index]['3'][$i] = $singkatan;
                }

            }
            $parsedata[$index]['4'] = implode(' ',$parsedata[$index]['3']);
             
            $index = $index + 1 ;
        }
        dd($parsedata);
        return view('welcome')->with('getdata',$parsedata);    
    }
}
