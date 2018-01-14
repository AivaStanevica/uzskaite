<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['biedrs', 'valde']);
        return view('profiles.profile');
    }
    public function registred(Request $request){
        $request->user()->authorizeRoles('biedrs');
        return view('delete.biedrs');
    }
}
