<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Va;
use Goutte;

class VAController extends Controller
{
    public function index(){
        $data = array();
        $crawler = Goutte::request('GET', 'http://www.bom.gov.au/aviation/volcanic-ash/au-va-sigmet.shtml');
        $crawler->filter('.middle-column-round .product')->each(function ($node) {
            $va = Va::create([
                'dataraw' => $node->text()
            ]);
        });
        return view('welcome');    
    }
}
