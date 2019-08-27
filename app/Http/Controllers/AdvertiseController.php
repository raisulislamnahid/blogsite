<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertise;

class AdvertiseController extends Controller
{
    public function adv(){

    	return view ('admin.home.advertise');
    }




   public function advtm(Request $request){


$uid=uniqid();
$photoimg=$request->file('img');
$imgname = $uid.$photoimg->getClientOriginalName();



$directory = 'add/';
$photoimg->move($directory,$imgname);


    $addp = new Advertise();
    $addp->img = $imgname;
    $addp->advertisename = $request->advertisename ;
    $addp->position = $request->position ;
    $addp->aurl = $request->aurl ;
   
$addp->save();

    	return view('admin.home.advertise');
    }









}
