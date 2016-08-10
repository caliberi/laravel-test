<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ToolbarController extends Controller
{
    private $endPoint;

    public function __construct()
    {
        $this->endPoint = $this->buildUrl();
    }

    public function show($url)
    {
        $result = [];

        if (isset($url)) {
            //create final url for the call and clean the requested url
            $final_url = $this->endPoint.'&url='.$url;
            $result = $this->doCurl($final_url);
        } else {
            $result = ['error' => true, 'error_msg' => 'attribute is missing'];
        }

        return $result;
    }

    /**
     * make a CURL request to the endpoint
     * @param  STRING $finalUrl URI ednpoint
     * @return OBJECT result in an object-array
     */
    private function doCurl($finalUrl)
    {
        //init curl
        $curl = curl_init();

        $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
        $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $header[] = "Cache-Control: max-age=0";
        $header[] = "Connection: keep-alive";
        $header[] = "Keep-Alive: 300";
        $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
        $header[] = "Accept-Language: en-us,en;q=0.5";
        $header[] = "Pragma: ";

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $finalUrl,
            CURLOPT_HTTPHEADER => $header,
        ));

        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        //set variable and decode the json response
        $respArray = json_decode($resp);

        //return the response
        return $respArray;
    }

    private function buildUrl()
    {
        return Config::get('toolbar.endpoint').'?key='.Config::get('toolbar.key');
    }
}
