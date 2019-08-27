<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;

class VideoController extends Controller
{
  
  public function addvideo(){

  	return view('admin.home.addvideo');
  }


  public function addvideos(Request $request){


  $addvs = new Videos();

  $addvs->video_name = $request->videoname;
  $addvs->video_link = $request->videolink;

  $addvs->save();
     	return Redirect('/addv')->with('message','Add Video Successfully');
  } 


public function viewvideos(){
      $dfd= Videos::all();

      return view('admin.home.viewvideo',['mizz'=>$dfd]);

}

public function videoedit($id){

    $editv = Videos::find($id);

    return view('admin.home.videoedit',['edtv'=>$editv]);


}



public function videoeditsave(Request $request){

$abcd = Videos::find($request->idr);

$abcd->video_name = $request->mizan;
$abcd->video_link = $request->videolink;
$abcd->save();
return Redirect('/viewvideop')->with('message','Update Successfully');


  }


public function videodelete($id){

  $abcd = Videos::find($id);
    $abcd->delete();

    return redirect('/viewvideop')->with ('message','Video Delete Successfully');
   }

}
