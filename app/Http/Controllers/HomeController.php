<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

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
        $buku = Buku::all();
      return view('home', ['buku' => $buku]);
        return view('home');
    }
}
