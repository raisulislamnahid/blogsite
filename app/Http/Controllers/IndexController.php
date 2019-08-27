<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Videos;
use App\Comment;
use App\Advertise;
use App\Editorial;
use App\photo;

class IndexController extends Controller
{
    public function index(){



 	 $vnwsh= News::orderBy('id', 'DESC')->offset(0)->limit(10)
     ->where('highlights', '=', 1)

     ->get();



     $ses= News::orderBy('id', 'DESC')->offset(0)->limit(10)->get();
     $gallerys = photo::orderBy('id', 'DESC')->offset(0)->limit(10)->get();




 	 $jatio= News::orderBy('id', 'DESC')->offset(1)->limit(10)
 	 ->where('category', '=', 1)
 	 ->get();

 	  $jatio1= News::orderBy('id', 'DESC')->offset(0)->limit(1)
 	 ->where('category', '=', 1)
 	 ->get();


      $slider= News::orderBy('id', 'DESC')->offset(0)->limit(5)
     ->where('slider', '=', 1)
     ->get();



//Rajnity
     $raj=News::orderBy('id', 'DESC')->offset(1)->limit(10)
     ->where('category', '=', 2)
     ->get();

      $raj1= News::orderBy('id', 'DESC')->offset(0)->limit(1)
     ->where('category', '=', 2)
     ->get();


//



//Bivagio
     $b=News::orderBy('id', 'DESC')->offset(1)->limit(10)
     ->where('category', '=', 4)
     ->get();

      $b1= News::orderBy('id', 'DESC')->offset(0)->limit(1)
     ->where('category', '=', 4)
     ->get();


//




//Binodon
     $bb=News::orderBy('id', 'DESC')->offset(1)->limit(10)
     ->where('category', '=', 6)
     ->get();

      $bb1= News::orderBy('id', 'DESC')->offset(0)->limit(1)
     ->where('category', '=', 6)
     ->get();


//


//Facebook
     $f=News::orderBy('id', 'DESC')->offset(1)->limit(10)
     ->where('category', '=', 6)
     ->get();



//



//International
     $int=News::orderBy('id', 'DESC')->offset(1)->limit(10)
     ->where('category', '=', 5)
     ->get();

      $int1= News::orderBy('id', 'DESC')->offset(0)->limit(1)
     ->where('category', '=', 5)
     ->get();


//




//Video
     $vd=Videos::orderBy('id', 'DESC')->offset(0)->limit(1)
     ->get();



//

// for Advertise start here
  $adds = Advertise::where('position', 1)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds2 = Advertise::where('position', 2)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds3 = Advertise::where('position', 3)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds4 = Advertise::where('position', 4)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds5 = Advertise::where('position', 5)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds6 = Advertise::where('position', 6)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds7 = Advertise::where('position', 7)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds8 = Advertise::where('position', 8)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds9 = Advertise::where('position', 9)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds10 = Advertise::where('position', 10)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();






// for Advertise end here

//editorial start here
  $editorials = Editorial::orderBy('id', 'DESC')->offset(0)->limit(1)->get();
//editorial end here

	return view('index',['vnwsh'=>$vnwsh,'jatio'=>$jatio,'jatio11'=>$jatio1,'ses'=>$ses,'slider'=>$slider,'raj'=>$raj,'raj1'=>$raj1,'int'=>$int,'int1'=>$int1,'b'=>$b,'b1'=>$b1,'bb'=>$bb,'bb1'=>$bb1,'vd'=> $vd , 'adds' => $adds,'adds2' => $adds2,'adds3' => $adds3,'adds4' => $adds4 ,'adds4' => $adds4 ,'adds5' => $adds5 ,'adds6' => $adds6 ,'adds7' => $adds7 ,'adds8' => $adds8 ,'adds9' => $adds9 ,'adds10' => $adds10, 'editorials' => $editorials,'f' => $f,'gallerys' => $gallerys ]);





    }

    public function category($id){
      $jatio1= News::orderBy('id', 'DESC')->offset(1)->limit(50)
     ->where('category', '=', $id)
     ->get();
     $allnewss = News::orderBy('id', 'DESC')->offset(0)->limit(10)->get();
// for Advertise start here
  $adds = Advertise::where('position', 1)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds2 = Advertise::where('position', 2)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds3 = Advertise::where('position', 3)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds4 = Advertise::where('position', 4)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();

// for Advertise end here

     $jatioa= News::orderBy('id', 'DESC')->offset(0)->limit(1)
     ->where('category', '=', $id)
     ->get();



     $ses= News::orderBy('id', 'DESC')->offset(0)->limit(10)->get();



    	return view('category',['ses'=>$ses,'jatio'=>$jatio1,'jatioa'=>$jatioa,'iid'=>$id,'adds' => $adds,'adds2' => $adds2,'adds3' => $adds3,'adds4' => $adds4 ,'allnewss' => $allnewss]);
    }




    public function single_page(Request $request, $id){


// for Advertise start here
  $adds = Advertise::where('position', 1)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
   $adds2 = Advertise::where('position', 2)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds3 = Advertise::where('position', 3)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
  $adds4 = Advertise::where('position', 4)->orderBy('id', 'DESC')->offset(0)->limit(1)->first();
// for Advertise end here

// Related categories news Start and End
$news_details    = News::where('id',$id)->first();
$relatedNews     = News::where('id','!=',$id)->where(['category'=>$news_details->category])->first();
$relatedallNews     = News::where('id','!=',$id)->where(['category'=>$news_details->category])->orderBy('id', 'DESC')->offset(0)->limit(50)->get();
$mores = News::where('id','!=',$id)->where(['category'=>$news_details->category])->orderBy('id', 'DESC')->offset(0)->limit(3)->get();


// Related categories news Start and End
     $ses= News::orderBy('id', 'DESC')->offset(0)->limit(10)->get();

    	$allnews = News::where('id', '=', $id)->get();
        $allnewss = News::orderBy('id', 'DESC')->offset(0)->limit(10)->get();

        // echo "<pre>"; print_r($allnewss);die;

      $allcomments = Comment::where('news_id',$id)->orderBy('id','DESC')->get();

    	// return view('single_page',compact('allnews'));

      if ($request->isMethod('post')) {
        $data = $request->all();

        $comments = new Comment;

        $comments->news_id = $data['news_id'];
        $comments->name = $data['name'];
        $comments->comment = $data['comment'];
        $comments->save();


        return back();

      }

return view('single_page',['ses'=>$ses,'allnews'=>$allnews,'allcomments' => $allcomments,'adds' => $adds,'adds2' => $adds2,'adds3' => $adds3,'adds4' => $adds4,'allnewss' => $allnewss , 'relatedNews' => $relatedNews,'relatedallNews'=> $relatedallNews,'mores' =>$mores]);

    }


    public function members2(){
     $ses= News::orderBy('id', 'DESC')->offset(0)->limit(10)->get();

    	return view('members',compact('ses'));
    }

}
