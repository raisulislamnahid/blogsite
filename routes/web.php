<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','IndexController@index')->name('index');
Route::get('/category/{id}','IndexController@category')->name('category');
Route::get('/view/{id}','IndexController@single_page')->name('single_page');

Route::post('/view/{id}','IndexController@single_page')->name('single_page');

Route::get('/members','IndexController@members2')->name('members');
Route::match(['get','post'],'/photography','PhotoController@photography')->name('photography');


Route::get('/new_addnews',[
	'uses'=> 'NewsController@addnews',
	'as' =>'addnews']);


Route::get('/addn',[
	'uses'=> 'NewsController@addnews',
	'as' =>'addnews']);


Route::post('/addnp',[
	'uses'=> 'NewsController@addn',
	'as' =>'addn']);



Route::get('/viewnews',[
	'uses'=> 'NewsController@viewnews',
	'as' =>'viewnews']);



// analysis
Route::get('/analysis',[
	'uses'=> 'NewsController@analysis',
	'as' =>'analysis']);
// end analysis





Route::get('/newsdelete/{id}',[
	'uses'=> 'NewsController@newsdelete',
	'as' =>'newsdelete']);



Route::get('/newsedit2/{id}',[
	'uses'=> 'NewsController@newsedit',
	'as' =>'newsedit']);

Route::post('/updatenews',[
	'uses'=> 'NewsController@newsupdaesuccess',
	'as' =>'newsupdaesuccess']);



Route::get('/addm',[
	'uses'=> 'MemberController@addm',
	'as' =>'addmember']);


Route::get('/viewmember',[
	'uses'=> 'MemberController@viewmember',
	'as' =>'viewmember']);



Route::post('/addms',[
	'uses'=> 'MemberController@addms',
	'as' =>'addmembers']);



Route::get('/memberedit/{id}',[
'uses'=>'MemberController@memberedit',
'as'=>'memberedit']);


Route::get('/updatemembersuccess',[
'uses'=>'MemberController@updatemembersuccess',
'as'=>'updatemembersuccess']);

Route::post('/membersave',[
'uses'=>'MemberController@membersave',
'as'=>'membersave']);


Route::get('/memberdelete/{id}',[
	'uses'=> 'MemberController@memberdelete',
	'as' =>'memberdelete']);


Route::get('/addv',[
	'uses'=> 'VideoController@addvideo',
	'as' =>'addvideo']);


Route::post('/addvs',[
	'uses'=> 'VideoController@addvideos',
	'as' =>'addvideos']);




Route::get('/viewvideop',[
	'uses'=> 'VideoController@viewvideos',
	'as' =>'viewvideo']);



Route::get('/addphoto',[
	'uses'=>'PhotoController@addphotos',
	'as'=>'addphoto']);


Route::post('/addphotojgkhg',[
	'uses'=>'PhotoController@addphotokjhjkg',
	'as'=>'addphotokjhjkg']);

//Photo route
Route::get('/viewphoto',[
'uses'=>'PhotoController@viewphoto',
'as'=>'viewphoto']);

Route::get('/photoedit/{id}',[
'uses'=>'PhotoController@photoedit',
'as'=>'photoedit']);

Route::post('/updatephotosuccess',[
'uses'=>'PhotoController@updatephotosuccess',
'as'=>'updatephotosuccess']);

Route::get('/photosave',[
'uses'=>'PhotoController@photosave',
'as'=>'photosave']);

Route::get('/photodelete/{id}',[
	'uses'=> 'PhotoController@photodelete',
	'as' =>'photodelete']);

//Video Controller

Route::get('/videoedit/{id}',[
'uses'=>'VideoController@videoedit',
'as'=>'videoedit']);


Route::post('/videoeditsave',[
'uses'=>'VideoController@videoeditsave',
'as'=>'videoeditsave']);


Route::get('/videodelete/{id}',[
'uses'=>'VideoController@videodelete',
'as'=>'videodelete']);


//Advertisement

Route::get('/advertisement',[
'uses'=>'AdvertiseController@adv',
'as'=>'advertisen']);

Route::post('/advertisementjhjh',[
'uses'=>'AdvertiseController@advtm', 
'as'=>'advtm']);

Route::match(['get','post'],'editorial-post','HomeController@editorialpost');