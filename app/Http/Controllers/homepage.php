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
        // $request->flash();
        // return redirect('/home2');
        // Oe we use
        // return redirect('/home2')->withInput($request->except('password'));
        // return $request->cookie();
        // return back()->withInput(); //redirecting back 
        // return back()->withInput()->with('status', 'Error');

        $pathToFile = public_path('images/cyberadnation2.png');
        return response()->file($pathToFile); //For displaying a file directly
        return response()->download($pathToFile); //For downloading
        $info = $request;
        return response()->view('page', ['info'=>$info]); //For returning view and Data
        return redirect()->route('test.add'); //redirecting to a named route
        if($request->hasFile('photo')){
        if ($path = $request->photo->store('./public')){
            // return $request->file('photo');
            $path;
            return "<img src=".$path.">";
        }
            
        }else {
            return "Not found";
        }
        if (!$request->filled('password')) {
            return "Password cannot be empty!";
        }
        elseif($request->has(['email', 'password'])) {
            $request->merge(['name'=> 'Leo']);
            return $request;
            // return 'Email is '.$request->input('email').' Password is '.$request->input('password');
        }elseif ($request->has('email')) {
            return $request->input('email');
        }
        else{
            return "Email and Password keys are required";
        }
        
    }
}
