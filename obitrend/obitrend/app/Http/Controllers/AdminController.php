<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Announcement;

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
        $requests = Announcement::all();

        return view('admin.view-requests',
        //array('users' => $users),
        array('requests' =>$requests)
      );

    }

    public function block($id)
    {
      //blocks user

    }

    public function read_request($id)
    {
      // make request as read
      $user = User::find($id);
      if($user){
        $user->account_status = 0;
        $user->save();
      }


    }

    public function approve_request($id)
    {
      //approves user requests
      $announcement = Announcement::find($id);
      if($announcement){
        $announcement->status = 1;
        $announcement->save();
      }


    }
}
