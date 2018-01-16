<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
class ProfileController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
     public function index(){

        return view('profiles.profile', array('user'=>Auth::user()));

     }

     public function updateAvatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename= time(). '.'. $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'. $filename));

            $user = Auth::user();
            $user->avatar=$filename;
            $user->save();
        }
         return view('profiles.profile', array('user'=>Auth::user()));
     }

}
