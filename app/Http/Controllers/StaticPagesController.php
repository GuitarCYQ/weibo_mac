<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{

	pubilc function home{
    	return view('static_pages/home');
    }
    pubilc function help{
    	return view('static_pages/help');
    }
    pubilc function about{
    	return view('static_pages/about');
    }
}
