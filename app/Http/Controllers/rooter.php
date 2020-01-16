<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rooter extends Controller
{
    
    public function __construct()
	    {
	    	$this->middleware(function($request,$next){

	    			if($request->age > 18)
	    			{
	    				return $next($request);
	    			}
	    			else 
	    			{
	    				return redirect('/home');
	    			}

	    		});
	    }

    public function index()
    	{
    		echo 'Hello today is '.date('d/m/Y h:m:i');
    	}
}
