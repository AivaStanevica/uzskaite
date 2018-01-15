<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class LanguageController extends Controller
{
    public function index(Request $request, $locale){
        App::setLocale($locale);

    }
}
