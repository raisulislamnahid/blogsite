<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photo;
use App\Photography;

class PhotoController extends Controller
{
    public function addphotos(){


    	return view('admin.home.addphoto');
    }





    public function addphotokjhjkg(Request $request){

$uid=uniqid();
$photoimg=$request->file('img');
$imgname = $uid.$photoimg->getClientOriginalName();



$directory = 'pimg/';
$photoimg->move($directory,$imgname);


    $addp = new photo();
    $addp->photoname = $request->photoname ;
    $addp->photoview = $imgname ;

     $addp->save();
     	return Redirect('/addphoto')->with('message','Add Photo Successfully');
  } 





  public function viewphoto(){
      $viewp= Photo::all();

      return view('admin.home.viewphoto',['niaz'=>$viewp]);
    
  }

  public function photoedit($id){

    $editp = Photo::find($id);

    return view('admin.home.photoedit',['edtp'=>$editp]);
  }

  public function updatephotosuccess(Request $request){


    $addp = Photo::find($request->id);
      $addp->photoname  = $request->photoname;
        $addp->photoview = $request->photoview;
    







      $addp->save();
     return Redirect('/viewphoto')->with('message','Photo Update Successfully');

  }
  public function photosave(Request $request){

    $addp = Photo::find($request->id);
      $addp->photoname  = $request->photoname;
        $addp->photoview = $request->photoview;
        

      $addp->save();
     return Redirect('/viewphoto')->with('message','Photo Update Successfully');


   }

   public function photodelete($id){

    $viewp = Photo::find($id);
    $viewp->delete();

    return redirect('/viewphoto')->with ('message','Photo Delete Successfully');
   }

   
}
