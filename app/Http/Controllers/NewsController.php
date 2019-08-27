<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Illuminate\Support\Facades\Input;
use Image;


class NewsController extends Controller
{
    public function addnews(){

    	return view('admin.home.addnews');

    }

     public function addn(Request $request){
     












     	$addn = new News();
     	$addn->headline = $request->headline ;
     	$addn->publisher = $request->publisher ;
     	$addn->news = $request->news ;
        
        $addn->date = date('d-M-y');
        $addn->category = $request->catagory ;
        $addn->highlights = $request->highlights ;
        $addn->slider = $request->slider ;
        $addn->nurl = $request->nurl ;


		if ($request->hasFile('newsimg')) {
          $image = Input::file('newsimg');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,99999).'.'.$extension;
            $large_image_path ='nimg/large/'.$filename;
            $small_image_path ='nimg/small/'.$filename;

            Image::make($image)->resize(800,600)->save($large_image_path);
            Image::make($image)->resize(400,400)->save($small_image_path);

            $addn->img = $filename;
          }
        }else {
          $addn->img = '';
        }






     	$addn->save();
     	return Redirect('/new_addnews')->with('message','Add News Successfully');

    }

    public function viewnews(){
    	$vnws= News::all();

    	return view('admin.home.viewnews',['vnws'=>$vnws]);

    }


public function analysis(){
        $vnws= News::all();

        return view('admin.home.analysis',['vnws'=>$vnws]);
}



   public function newsdelete($id){

    $vnws = News::find($id);
    $vnws ->delete();
  


    return redirect('/viewnews')->with('message','News Delete Successfully'); 
   }  



public function newsedit($id){
        $vnwsu= News::find($id);

        return view('admin.home.updatenews',['vnws'=>$vnwsu]);

    }



public function newsupdaesuccess(Request $request){

        $addn = News::find($request->id);

        $addn->headline = $request->headline ;
        $addn->publisher = $request->publisher ;
        $addn->news = $request->news ;
        $addn->save();
        return Redirect('/viewnews')->with('message','Update Successfully');
}



}

