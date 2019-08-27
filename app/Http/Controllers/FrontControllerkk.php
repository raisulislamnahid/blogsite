<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class FrontController extends Controller
{
    public function index(){
    	 $vnwsh= News::all();

    	return view('frontView.home.homeContent',['vnwsh'=>$vnwsh]);
    } 

   
      

    public function fnews($nid){
       $vnws= News::find($nid);


    	return view('frontView.home.fnews',['vnws'=>$vnws]);


    }




}
