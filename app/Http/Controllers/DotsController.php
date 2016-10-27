<?php

//** Do NOT do format code on this file...ever...

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App;
use App\User;
class DotsController extends Controller
{
	
<<<<<<< HEAD
	
	/**	* Display a listing of the resource.
	* @return \Illuminate\Http\Response								     
	*/
	
	public function index()
		{
		
=======
	/**	* Display a listing of the resource. 
	*
	* 
	@return \Illuminate\Http\Response
	*/
	
	public function index()
	{
			
>>>>>>> 4e21b69cf8c35a2396fc865e18c0bac738462afd
		$DotTables = DB::table('DotTables')->get();
		
		// 		printf('<pre>%s</pre>', print_r($DotTables, 1));
		
		return view('home', compact('DotTables'));
		
	}
	
<<<<<<< HEAD
	
	/**	* Show the form for creating a new resource.
	*
		* 
		@return \Illuminate\Http\Response
		*/
	
	public function create(Request $request){
		
=======
	/**	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	
	public function create(Request $request){
			
>>>>>>> 4e21b69cf8c35a2396fc865e18c0bac738462afd
		// 		get all the data that has been posted from the form
		
		$post_data = $request->all();
		
		// 		add a new dot
		
		$DotTable = new App\DotTable();
		$DotTable->user_id = Auth::user()->id;
		$DotTable->pageNumber = $post_data['pageNumber'];
		$DotTable->counts = $post_data['counts'];
		$DotTable->ss = $post_data['selectSide'];
		$DotTable->sl = $post_data['selectLine'];
		$DotTable->si = $post_data['selectIn'];
		$DotTable->dfl = $post_data['distanceFromYardLine'];
		$DotTable->hm = $post_data['hashMark'];
		$DotTable->fb = $post_data['fOrb'];
		$DotTable->sfh = $post_data['stepsFromHash'];
		$DotTable->save();
		$DotTables = DB::table('DotTables')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
		
		return view('home', compact('DotTables'));
		
	}
	
<<<<<<< HEAD
	
	/**	Store a newly created resource in storage.
	*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
=======
	/**	Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response							     */
>>>>>>> 4e21b69cf8c35a2396fc865e18c0bac738462afd
	
	public function store(Request $request)
		{
		//
	}
<<<<<<< HEAD
	
	
	/**	Display the specified resource.							     *							     * @param  int  $id							     * @return \Illuminate\Http\Response							     */
	
	public function show(Request $request)
		{
		$DotTables = DB::table('DotTables')->get();
=======
		
	/**	Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	
	public function show(Request $request)
	{
		
		// $DotTables = DB::table('DotTables')->get();
		$DotTables = DB::table('DotTables')->orderBy('pageNumber', 'asc')->where('user_id', Auth::user()->id)->get();
		
>>>>>>> 4e21b69cf8c35a2396fc865e18c0bac738462afd
		return view('dotbook', compact('DotTables'));
	}
	
<<<<<<< HEAD
	
	/**	Show the form for editing the specified resource.
	*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	
	public function edit($id)
		{
		//
	}
	
	
	/**	Update the specified resource in storage.
	*
		* @param  \Illuminate\Http\Request  $request
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	
	public function update(Request $request, $id)
		{
		//
	}
	
	
	/**	Remove the specified resource from storage.
	*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	
	public function destroy($id)
		{
		//
=======
	/**	Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	
	public function edit($id)
	{
		//			
	}
	
	/**	Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	
	public function update(Request $request, $id)
	{
		//			
	}
	
	/**	Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	
	public function destroy($id)
	{
		//			
>>>>>>> 4e21b69cf8c35a2396fc865e18c0bac738462afd
	}
	
}




