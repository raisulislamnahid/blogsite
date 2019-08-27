<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.homeContent');
    }

    public function editorialpost(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $editors = new Editorial;

             if ($request->hasFile('editorial_img')) {
                $image = $request->file('editorial_img');

                $name = $image->getClientOriginalName();
                $destinationPath = public_path('add/');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $editors->editorial_img = $name;
        }else {
          $editors->img = '';
        }

            $editors->quotes = $data['quotes'];
            $editors->editor_name = $data['editor_name'];
            $editors->save();

            return back()->with('message_susscess','Quotes added Susscessfully');

        }

        return view('admin.home.editorialpost');
    }
}
