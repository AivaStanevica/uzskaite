<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
     public function index(){

        $profiles =  User::all();
        return view('profiles.profile', compact('profiles'));

     }

     public function store(){


     }

}
