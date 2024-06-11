<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class TracerouteController extends Controller
{
    //
    public function index(){
        return view('traceroute.index');
    }
    public function resolve3(Request $request){
        $request->validate([
            'domain' => 'required | url'
        ]);

        $domain = $request->input('domain');
        $maxHops = $request->input('max_hops', 30);
        $command = sprintf('traceroute -m %d %s', $maxHops, $domain);
        

        if(!$command->isSuccessful()){
            throw new ProcessFailedException($command);
        }
        $output = exec($command);

        return view('traceroute.result', [
            'output' => $output
        ]);
    }
}


