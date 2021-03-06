<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IataCodes extends Controller
{
    private $api_key = "668f732a-0f32-44a4-91e4-cca17e9a5e3b";
    private $version = "1";
    private $api_url = "http://iatacodes.org/api/";

    public function __construct($api_key = "", $version = "1") {
        if(!empty($api_key)) $this->api_key = $api_key;
        if(!empty($version)) $this->version = $version;
    }

    public function api($method, $params = array()) {
        $url = $this->api_url . "v" . $this->version . "/" . $method . "?" . 
            http_build_query(array_merge(array("api_key" => $this->api_key), $params));
        return json_decode(file_get_contents($url), true);
    }

}
