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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=[
            'greetings'=>'Selamat Datang',
            'admin'=>'Di Halaman Administrator',
            'member'=>'Di Halaman Member',
        ];
        return view('home2', $data);
    }
}
