<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use \GuzzleHttp\Client as GuzzleClient;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // phpinfo();exit();
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjVmNTBjN2E3NTUxYWQ4MGJhMjI2MzYyNSIsImlhdCI6MTU5OTEyOTcxMSwiZXhwIjoxNjA2OTA1NzExfQ.p8iG1eorMOMSCKdIyyBaHFlmJTmvdUa7KHINWPtfNTg";
        $url = "http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/property/getMyListings/5f1955e4fc671c081ef418e7";
        $ch = curl_init($url);
        $header=array(
            'Content-Type:application/json',
            'Authorization: Bearer '.$token
        );

        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        $propertyList = json_decode($result);

        // $response = $client->request('GET', 'http://ec2-52-14-234-54.us-east-2.compute.amazonaws.com/api/v1/users/5f1955e4fc671c081ef418e7', [
        //     'headers' => [
        //         'Authorization' => 'Bearer '.$token,
        //         'Accept' => 'application/json',
        //     ],
        // ]);

        // return $response->getBody();

        // api for home page goes here
        return view('client.home.index', compact('propertyList'));
    }
}
