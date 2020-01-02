<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$videos =  DB::table('videos')->paginate(5); 1 opción
        $videos =  Video::orderBy('id', 'desc')->paginate(5);

        return view('home', array(
            'videos' => $videos
        ));
    }
}
