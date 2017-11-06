<?php

namespace App\Http\Controllers;
use  Auth;
use App\Announcement;
use App\Notification;
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
      $requests = Notification::all();
      return view('client.make-announcements',array('requests' => $requests ));
  }

  //fetches  all approved requests
    public function announcements()
    {
         $announcements = DB::table('announcements')->where('is_featured',1)->get();
        //return view('client.view-announcements');
         return view('client.view-announcements',array('request' => $announcements ));
    }

// model make request data from form
  public function create(request $request)
  {
    //checks for file upload(id picture)
      if ($request->hasFile('file'))
      {
         $filename = $request->file->getClientOriginalName();
         $path = $request->file->storeAs('public/upload',$filename);
      //creates announcements
           Announcement::create(array(
               'content'=>Input::get('content'),
               'user_id'=>Auth::user()->id,
               'type_of_announcement'=>Input::get('type_of_announcement'),
               'image_thumb'=>'null',
               'image_path'=>$path,
               'description'=>Input::get('description'),
               'file_path'=>'null',
               'location'=>Input::get('location'),
               'payment'=>Input::get('payment'),
               'is_featured'=>0,
               'title'=>Input::get('title')

             ));
             //if successful redirect to dashboard
         return redirect()->route('client.index');
      }
          return redirect()->route('create.announcement');

  }
  // update function
    public function update(request $request , $id)
    {
        $announcement = Announcement::find($id);
        $announcement->content =$request->input('content');
        $announcement->description =$request->input('description');
        $announcement->image_thumb =$request->input('content');
        $announcement->location =$request->input('location');
        //$announcement->content =$request->input('content');
        $announcement->save();
        return "successful update #".$announcement->id;

    }
    // find function
      public function show($id)
      {
        return Announcement::find($id);
      }
}
