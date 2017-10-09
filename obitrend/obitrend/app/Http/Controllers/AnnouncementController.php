<?php

namespace App\Http\Controllers;
use  Auth;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Session;




class AnnouncementController extends Controller
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


//fetches make request view
  public function index()
  {
      return view('client.make-announcements');
  }

  //fetches  all approved requests
    public function announcements()
    {
         $announcements = DB::table('announcements')->where('is_featured',1)->get();
        //return view('client.view-announcements');
         return view('client.view-announcements',array('request' => $announcements ));
    }

// model make request data from form
  public function create()
  {

    Announcement::create(array(
        'content'=>Input::get('content'),
        'user_id'=>Auth::user()->id,
        'type_of_announcement'=>Input::get('type_of_announcement'),
        'image_thumb'=>'jjjrjjr',
        'description'=>Input::get('description'),
        'file_path'=>'jjjrjjr',
        'location'=>Input::get('location'),
        'payment'=>Input::get('payment'),
        'is_featured'=>0,
        'title'=>Input::get('title')


    ));

   return redirect()->route('client.index');
      //return 0;
  }
}
