<?php

namespace App\Http\Controllers;

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
		return view('vendor.home');
		
		echo("Hello");
		echo $ss = $request->input('selectSide');
		echo $sl = $request->input('selectLine');
		echo $si = $request->input('selectIn');
		echo $dfl = $request->input('distanceFromYardLine');
		echo $hm = $request->input('hashMark');
		echo $fb = $request->input('fOrb');
		echo $sfh = $request->input('stepsFromHash');
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
		$DotTable->ss = $post_data['selectSide'];
		$DotTable->sl = $post_data['selectLine'];
		$DotTable->si = $post_data['selectIn'];
		$DotTable->dfl = $post_data['distanceFromYardLine'];
		$DotTable->hm = $post_data['hashMark'];
		$DotTable->fb = $post_data['fOrb'];
		$DotTable->sfh = $post_data['stepsFromHash'];
		$DotTable->save();
		return view('/home');
	}
	
	
	
	
	
	
	
	/**
	Store a newly created resource in storage.
			     *
			     * @param  \Illuminate\Http\Request  $request
			     * @return \Illuminate\Http\Response
			     */
			    public function store(Request $request)
			    {
		$ss = $request->input('selectSide');
		$sl = $request->input('selectLine');
		$si = $request->input('selectIn');
		$dfl = $request->input('distanceFromYardLine');
		$hm = $request->input('hashMark');
		$fb = $request->input('fOrb');
		$sfh = $request->input('stepsFromHash');
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
