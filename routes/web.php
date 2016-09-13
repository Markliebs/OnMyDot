<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index'); 

Route::post('/dotLog', 'DotsController@create');
// Route::resource('/dotLog', 'DotsController@index');

{
    return view('/home');
}


// echo $ss = $request->input('selectSide');
// 		echo $sl = $request->input('selectLine');
// 		echo $si = $request->input('selectIn');
// 		echo $dfl = $request->input('distanceFromYardLine');
// 		echo $hm = $request->input('hashMark');
// 		echo $fb = $request->input('fOrb');
// 		echo $sfh = $request->input('stepsFromHash');

// “ use App\Zombie as Zombie;
//  4 use Illuminate\Http\Request;
//  5 
//  6 Route::post('/admin/zombies/create', function(Request $request){
//  7   
//  8   $post_data = $request->all();
//  9 
// 10   // create a new zombie
// 11   $zombie = new Zombie();
// 12   $zombie->name = $post_data['name'];
// 13   $zombie->strength = $post_data['strength'];
// 14   $zombie->health = $post_data['health'];
// 15   $zombie->save();
// 16 });”

