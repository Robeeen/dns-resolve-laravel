<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TraceController extends Controller
{
    //
    public function index(){
        return view('tracert.index');
    }

    public function resolve2(Request $request){
        $request->validate([
            'host' => 'required | string'
        ]);
        $ip = $request->input('host');
        $client = new Client();

        $response = $client->get("https://ipinfo.io/{$ip}/json");
        $ipInfo = json_decode($response->getBody(), true);

        return view('tracert.result', [
            'ipInfo' => $ipInfo
        ]);
    }
}
