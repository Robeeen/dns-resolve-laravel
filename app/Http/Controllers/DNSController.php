<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DNSController extends Controller
{
    public function index(){
        return view('dns.index');
    }

    public function resolve(Request $request){
        $request->validate([
            'domain' => 'required|url'
        ]);

        $domain = parse_url($request->input('domain'), PHP_URL_HOST);

        $dnsRecords = dns_get_record($domain, DNS_ALL);

        return view('dns.result', [
            'dnsRecords' => $dnsRecords,
            'domain' => $domain
        ]);
    }
}
