<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Announcement;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //fetches all users
        $users = User::all();
        $requests = Announcement::all();

        return view('admin.index',
        array('users' => $users),
        array('requests' =>$requests)
      );


    }
    public function get_all_requests()
    {
      //fetches all users
      //  $users = User::all();
      $read = DB::table('announcements')->where('status',1)
      ->get();
        $request = DB::table('announcements')->where('status',0)
        ->get();

        return view('admin.view-requests',
        array('read' => $read),
        array('requests' =>$request)
      );

    }

    //function that gets each request
    public function get_request($id)
    {

        $request = DB::table('announcements')->where('id',$id)
        ->get();

        return view('admin.approve-requests',

         array('requests' =>$request)
         );


    }

    public function block($id)
    {
      //blocks user


       $user = User::find($id);
      if($user){
  
      //   User::update($id, array(
      //   'account_status'=>0
      // ));
      //
      //   return Redirect::to_route('admin.index',$id)->with('message','User blocked successfully');
      return 1;
        }
  //  return Redirect::to_route('admin.index',$id)->with('message','User blocking unsuccessful');
  return 0;
     }

    public function read_request($id)
    {
      // make request as read
    $announcement = Announcement::find($id);
      if($announcement){
        Announcement::update($id, array(
        'status'=> 1
        ));

      }


    }

    public function approve_request($id)
    {
      //approves user requests
      $announcement = Announcement::find($id);
      if($announcement){
        $announcement->is_featured = 1;
        $announcement->save();
      }


    }
}
