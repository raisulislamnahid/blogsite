<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use DB;

class MemberController extends Controller
{
        public function addmember(){

    	return view('admin.home.addmember');

    }


       public function viewmember(){

    	    $madd = Member::all();
     
        return view ('admin.home.viewmember',['madd'=>$madd]);


  }



    public function addm(){

      return view('admin.home.addmember');

    }






   public function addms(Request $request){


$uid=uniqid();
$newsimg=$request->file('img');
$imgname = $uid.$newsimg->getClientOriginalName();



$directory = 'mimg/';
$newsimg->move($directory,$imgname);









		$addm = new Member();
     	$addm->name  = $request->name;
        $addm->phonenumber = $request->phonenumber;
        $addm->designation = $request->designation;

        $addm->cardvalidity = $request->cardvalidity;
        $addm->img = $imgname;



     	$addm->save();
     	  return Redirect('/addm')->with('message','Add Member Successfully');

	}

  public function memberedit($id){

    $viewm = Member::find($id);

    return view('admin.home.memberedit',['editm'=>$viewm]);
  }

  public function updatemembersuccess(Request $request){


    $addm = Member::find($request->id);
      $addm->name  = $request->name;
        $addm->phonenumber = $request->phonenumber;
        $addm->designation = $request->designation;
        $addm->cardvalidity = $request->cardvalidity;







      $addm->save();
     return Redirect('/viewmember')->with('message','Member Update Successfully');
 

   }

   public function membersave(Request $request){

    $addm = Member::find($request->id);
      $addm->name  = $request->name;
        $addm->phonenumber = $request->phonenumber;
        $addm->designation = $request->designation;
        $addm->cardvalidity = $request->cardvalidity;

      $addm->save();
     return Redirect('/viewmember')->with('message','Member Update Successfully');


   }

   public function memberdelete($id){

      $viewm = Member::find($id);
      $viewm->delete();

      return redirect('/viewmember')->with('message','Member Delete Successfully');
   }

}



