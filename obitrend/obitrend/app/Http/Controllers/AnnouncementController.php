<?php

namespace App\Http\Controllers;
use  Auth;
use App\Announcement;
use App\Notification;
use App\Tribute;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use InterImage;
use Intervention\Image\ImageManagerStatic as Image;
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
//     $this->validate($request,[
//   'description' => 'max:255',
//    'image_path' => 'required|image',
// ]);
      if ($request->hasFile('file'))
      {
         $filename = $request->file->getClientOriginalName();
          $path = $request->file->storeAs('public/id',$filename);
          $file = $request->file_path->storeAs('public/upload',$filename);
      //creates announcements

    //  $path = Storage::disk('public')->putfile('id',$request->file);
           Announcement::create(array(
               'content'=>Input::get('content'),
               'user_id'=>Auth::user()->id,
               'type_of_announcement'=>Input::get('type_of_announcement'),
               'image_thumb'=>'null',
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
         return redirect()->route('client.index');
      }else{

      }
          return redirect()->route('create.announcement');


  }

  public function create_comment(request $request )
  {
 $id = Input::get('announcement_id');
      //creates tribute
     Tribute::create(array(
               'announcement_id'=>$id,
               'user_id'=>Auth::user()->id,
               'comment'=>Input::get('comment')

             ));
             //if successful redirect to dashboard
    return redirect()->back()->with('message','Tribute posted successfully');
      //  return Redirect::to('announcement/each/{$id}')->with('message','User blocked successfully');
 // return $id;


  }

  public function get_each_announcements($id)
  {
    //fetches  all approved requests based on type
      $request =  Announcement::with('user')->where('id',$id)->get();
      $tribute =  Tribute::with('user')->where('announcement_id',$id)->get();

     $requests = Notification::all();

 return view('client.view-each-announcements',['requests' => $requests, 'request' => $request ,'tribute' => $tribute  ]);
    // return view('client.view-each-announcements',array('tribute' =>$tribute ),array('requests' => $requests),array('request' =>$request));


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
      //  return response()->download(public_path('file_path/from_public_dir.pdf'));
      }
/* Fetch the artwork using the id */
      public function artwork($id, Request $request){
// $announcements = DB::table('announcements')->where('is_featured',1)->get();
// $announcement = array('request' => $announcements );
 // $announcements= Announcement::with('user')->where('is_featured',1)->get();
    $image_path = 'public/upload/'.$id;

      $image = Storage::get($image_path);

      /* Return the file */
       return Image::make($image)->response();
      //return $announcements;
  }
}
