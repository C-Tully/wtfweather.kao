<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasePageController extends Controller
{
    //
    public function index(){
    	return view('pages.index');
    }

    public function store(){
    	//to do: Must hit as many API's here as possible to gather information for the user.
    }

}
