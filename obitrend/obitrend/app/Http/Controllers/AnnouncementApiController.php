<?php

namespace App\Http\Controllers;
use  Auth;
use App\Announcement;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use InterImage;
use Intervention\Image\ImageManagerStatic as Image;
use Session;




class AnnouncementApiController extends Controller
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
    //  return view('client.make-announcements',array('requests' => $requests ));
    return "hello world";
  }

  //fetches  all approved requests
    public function announcements()
    {
         $announcements = DB::table('announcements')->where('is_featured',1)->get();
        //return view('client.view-announcements');
         return array('request' => $announcements );
    }

// model make request data from form
  public function create(request $request)
  {
    //checks for file upload(id picture)
      if ($request->hasFile('file'))
      {
         $filename = $request->file->getClientOriginalName();
         $path = $request->file->storeAs('public/upload',$filename);
         $file = $request->file_path->storeAs('public/upload',$filename);
      //creates announcements
           Announcement::create(array(
               'content'=>Input::get('content'),
               'user_id'=>Auth::user()->id,
               'type_of_announcement'=>Input::get('type_of_announcement'),
              // 'image_thumb'=>'null',
               'image_path'=>$path,
               'description'=>Input::get('description'),
                'country'=>Input::get('country'),
               'file_path'=>$file,
               'location'=>Input::get('location'),
               'payment'=>Input::get('payment'),
               'is_featured'=>0,
               'status'=>0,
               'title'=>Input::get('title')

             ));
             //if successful redirect to dashboard
        // return redirect()->route('client.index');
        return array('message' => 'success' );
      }else{

      }
          return array('message' => 'success' ) ;


  }

  public function create_comment(request $request)
  {

      //creates tribute
      //      Tribute::create(array(
      //          'announcement_id'=>Input::get('content'),
      //          'user_id'=>Auth::user()->id,
      //          'title'=>Input::get('title')
      //
      //        ));
      //        //if successful redirect to dashboard
      //    return redirect()->route('client.index');
      // }else{
      //
      // }
      //     return redirect()->route('create.announcement');

  }

  public function get_comment()
  {

      //creates tribute
      //      Tribute::create(array(
      //          'announcement_id'=>Input::get('content'),
      //          'user_id'=>Auth::user()->id,
      //          'title'=>Input::get('title')
      //
      //        ));
      //        //if successful redirect to dashboard
      //    return redirect()->route('client.index');
      // }else{
      //
      // }
      //     return redirect()->route('create.announcement');

  }

  // update function
    public function update(request $request , $id)
    {
        $announcement = Announcement::find($id);
        $announcement->description =$request->input('description');
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

      public function artwork( $id){
      /* Fetch the artwork using the id */
      $image_path = 'public/upload/'.$id;

      $image = Storage::get($image_path);

      /* Return the file */
      // return Image::make($image)->response();
       return redirect()->route('create.announcement');
  }
}
