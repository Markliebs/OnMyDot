<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

class DotsController extends Controller
{

	
	/**
	* Display a listing of the resource.
							     *
							     * @return \Illuminate\Http\Response
							     */
							    public function index()
							    {
		$DotTables = DB::table('DotTables')->get();

		//  printf('<pre>%s</pre>', print_r($DotTables, 1));
		
		return view('home', compact('DotTables'));
	}
	
	
	
	
	/**
	* Show the form for creating a new resource.
							     *
							     * @return \Illuminate\Http\Response
							     */
							    public function create(Request $request){
		
		// 		get all the data that has been posted from the form
		
		$post_data = $request->all();
		
		// 		add a new dot
		
		$DotTable = new App\DotTable();
		$DotTable->pageNumber = $post_data['pageNumber'];
		$DotTable->ss = $post_data['selectSide'];
		$DotTable->sl = $post_data['selectLine'];
		$DotTable->si = $post_data['selectIn'];
		$DotTable->dfl = $post_data['distanceFromYardLine'];
		$DotTable->hm = $post_data['hashMark'];
		$DotTable->fb = $post_data['fOrb'];
		$DotTable->sfh = $post_data['stepsFromHash'];
		$DotTable->save();
		$DotTables = DB::table('DotTables')->orderBy('created_at', 'desc')->get();
		return view('home', compact('DotTables'));
	}
	
	
	
	/**
	Store a newly created resource in storage.
						     *
						     * @param  \Illuminate\Http\Request  $request
						     * @return \Illuminate\Http\Response
						     */
						    public function store(Request $request)
						    {
		// $ss = $request->input('selectSide');
		// $sl = $request->input('selectLine');
		// $si = $request->input('selectIn');
		// $dfl = $request->input('distanceFromYardLine');
		// $hm = $request->input('hashMark');
		// $fb = $request->input('fOrb');
		// $sfh = $request->input('stepsFromHash');
	}
	
	
	
	
	
	
	
	
	/**
	Display the specified resource.
						     *
						     * @param  int  $id
						     * @return \Illuminate\Http\Response
						     */
						    public function show($id)
						    {
		//
	}
	
	
	
	
	
	
	
	
	/**
	Show the form for editing the specified resource.
						     *
						     * @param  int  $id
						     * @return \Illuminate\Http\Response
						     */
						    public function edit($id)
						    {
		//
	}
	
	
	
	
	
	
	
	
	/**
	Update the specified resource in storage.
						     *
						     * @param  \Illuminate\Http\Request  $request
						     * @param  int  $id
						     * @return \Illuminate\Http\Response
						     */
						    public function update(Request $request, $id)
						    {
		//
	}
	
	
	
	
	
	
	
	
	/**
	Remove the specified resource from storage.
						     *
						     * @param  int  $id
						     * @return \Illuminate\Http\Response
						     */
						    public function destroy($id)
						    {
		//
	}
}