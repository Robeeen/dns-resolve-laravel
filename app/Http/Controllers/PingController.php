<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingController extends Controller
{
    public function index(){
        return view('ping.index');
    }
    public function resolve(Request $request){
        $request->validate([
            'host' => 'required | string',
        ]);
        $host = $request->input('host');
        $output = [];
        $result = null;

        if(stripos(PHP_OS, 'WIN') === 0){
            exec("ping -n 4 $host", $output, $result);
        }else{
            exec("ping -c 4 $host", $output, $result);
        }

        return view('ping.result', [
            'host' => $host,
            'output' => $output,
            'result' => $result
        ]);

    }
}
