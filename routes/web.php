<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('profile/{name}', 'ProfileController@showProfile');

Route::get('home','HomeController@showWelcome');
//Route::get('about','AboutController@showDetails');

Route::get('about',function (){
   return view('index') ;
});

Route::get('about/rick-astley',function (){
    return 'NEVER GONNA GIVE YOU UP' ;
});

Route::get('about/rick-astley-on',function (){
    return 'NEVER GONNA LET YOU DOWN' ;
});

Route::any('submit-from',function (){
    return 'process from';
});

//Route::get('about/{theSubject}',function ($theSubject){
//    return $theSubject. ' Content gonna here';
//});

Route::get('about/{theSubject}','AboutController@showSubject' );

Route::get('about/classes/{Art}/{Price}',function ($Art,$Price){
    return $Art.' '. $Price. ' Content';
});

Route::get('about/classes1/{number1}/{number2}',function ($number1,$number2){
    return "$number1". '+'. "$number2". '='  .$number1+$number2;
});

Route::get('where',function (){
   return Redirect::to('about/rick-astley-on');
});

Route::get('/insert',function (){
    DB::insert('insert into books(bookid,authorid,title,ISBN,pub_year,avalliable) values (01,11,"ABC","DEF",2022,01)');
    DB::insert('insert into books(bookid,authorid,title,ISBN,pub_year,avalliable) values (02,13,"ACC","DRF",2022,05)');
    DB::insert('insert into books(bookid,authorid,title,ISBN,pub_year,avalliable) values (03,12,"AEC","DTF",2022,09)');

    return("done");
});

Route::get('/sreach',function (){
   $result = DB::select('select * from books where bookid = 01');
   return $result;
});
