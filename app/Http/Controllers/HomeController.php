<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->speciality !== 'admin')
        {
            $videos = Video::whereSpeciality(Auth::user()->speciality)->get();
        }
        else
        {
            $videos = Video::all();
        }
        return view('home', compact('videos'));
    }

    public function video()
    {
        return view('admin.add-video');
    }

    public function codes()
    {
        return view('admin.generate-codes');
    }

    public function send()
    {
        return view('admin.send-code');
    }
}
