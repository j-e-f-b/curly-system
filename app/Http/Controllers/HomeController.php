<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\user;

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
    public function index()
    {
        $user = User::find(Auth::user()->id);

        if ($user->hasRole('admin')) {
            return view('home');
        }


    }
}
