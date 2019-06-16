<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Va;
use App\Http\Controllers\Helper\ParseSigmet;
use App\Http\Controllers\Helper\IataCodes;
use Goutte;

class VAController extends Controller
{
    public static function index(){
        $data = array();
        $response = "";
        // $crawler = Goutte::request('GET', 'http://www.bom.gov.au/aviation/volcanic-ash/au-va-sigmet.shtml');
        // $crawler->filter('.middle-column-round .product')->each(function ($node) {
        //     $check = Va::where('dataraw', '=', $node->text())->exists();
        //     if(!$check){
        //         $va = Va::create([
        //             'dataraw' => $node->text()
        //         ]);
        //     }else{
        //         return false;
        //     }
        // });
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
                    $parsedata[$index]['3'][$i] = 'daerah '.$fir;
                }

                $sequence = ParseSigmet::sequence_number($parsedata[$index]['2'][$i]);
                if(!(is_null($sequence))){
                    if($sequence == "SIGMET"){
                        $parsedata[$index]['3'][$i] = $sequence;
                    }
                    else{
                        $parsedata[$index]['3'][$i] = 'ke-'.$sequence;
                    }
                }

                $no_valid = ParseSigmet::validitas($parsedata[$index]['2'][$i]);
                if(!(is_null($no_valid))){
                    if($no_valid == "VALID"){
                        $parsedata[$index]['3'][$i] = 'no '.$no_valid;
                    }
                    else{
                        $parsedata[$index]['3'][$i] = $no_valid;
                    }
                }

                $area = $parsedata[$index]['2'][$i];
                $pattern_area = preg_match("/^[A-Z]{4}-[A-Z]{4}$/", $area);
                if($pattern_area == true){
                    $ex_area = explode("-",$area);
                    for( $i_area =1 ; $i_area <= sizeof($ex_area) ; $i_area++ ){

                        $ex_area[$i_area-1] = ParseSigmet::FIR($ex_area[$i_area-1]);

                    }
                    $parsedata[$index]['3'][$i] = "mencakup wilayah ".implode("-",$ex_area);
                }

                $org = ParseSigmet::OriginatingOffice($parsedata[$index]['2'][$i]);
                if(!(is_null($org))){
                    $parsedata[$index]['3'][$i] = $org;
                }

                $koordinat = ParseSigmet::koordinat($parsedata[$index]['2'][$i]);
                if(!(is_null($koordinat))){
                    $parsedata[$index]['3'][$i] = $koordinat;
                }
                $fl = ParseSigmet::fl($parsedata[$index]['2'][$i]);
                if($fl == true){
                    $parsedata[$index]['2'][$i] = str_replace("FL","flight level: ",$parsedata[$index]['2'][$i]);
                    $parsedata[$index]['3'][$i] = str_replace("SFC","surface",$parsedata[$index]['2'][$i]);
                }

                $singkatan = ParseSigmet::singkatan($parsedata[$index]['2'][$i]);
                $pattern_psn = preg_match('/PSN/',$parsedata[$index]['2'][$i]);                
                if(!(is_null($singkatan))){
                    $parsedata[$index]['3'][$i] = $singkatan;
                }elseif($pattern_psn == true){
                    $parsedata[$index]['3'][$i] = str_replace("PSN","Position ",$parsedata[$index]['2'][$i]);
                }
            }
            $parsedata[$index]['4'] = implode(' ',$parsedata[$index]['3']);


            $index = $index + 1 ;
        }

        $index = 0 ;
        foreach($parsedata as $data){

            for ($i=0 ; $i < count($data[3]) ; $i++){
            // Slice Waktu
            $pattern_waktu = preg_match('/pukul/',$data['3'][$i]);
                if($pattern_waktu == true){
                    $parsedata[$index][5] = $data[3][$i+1].' '.$data[3][$i+2];    
                }        
            // Slice Waktu

            // Slice Tempat
            $pattern_tempat = preg_match('/daerah/',$data['3'][$i]);
                if($pattern_tempat == true){
                    $parsedata[$index][6] = str_replace("daerah ",'',$data['3'][$i]);    
                }        
            // Slice Tempat

            // Slice Detail
                $pattern_detail = preg_match('/Flight Information Region/',$data['3'][$i]);
                if($pattern_detail == true){
                    for($loop_detail = $i+1 ; $loop_detail < count($data[3]) ; $loop_detail++){
                        $parsedata[$index][7][$loop_detail] = $data['3'][$loop_detail];    
                    }
                    $parsedata[$index][7] = implode(' ',$parsedata[$index][7]);
                    continue;
                }        
            // Slice Detail
        
            }


            $index = $index + 1;
        }

        return $parsedata;    
    }
}
