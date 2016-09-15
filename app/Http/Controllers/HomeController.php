<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $DotTables = DB::table('DotTables')->get();

	//  printf('<pre>%s</pre>', print_r($DotTables, 1));
		
		return view('home', compact('DotTables'));

        return view('home');
    }
    
}

