<?php

namespace App\Http\Controllers;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class homepage extends Controller
{ 
    public function about(Request $request) {
        // return $request->schemeAndHttpHost();
        // return $request->host();
        // return $request->HttpHost();
        // return $request->method();
        // return $request->header('X-Header-Name', 'default');
        // return $request->ips();
        // return $request->ip();
        // return $request->getAcceptableContentTypes();
        return $request->all();
    }
    public function handler(Request $request)
    {
        // if ($request->input('token') !== '12345678') {
        //     return $request;
        // }
        return $request->url();
    }
}
