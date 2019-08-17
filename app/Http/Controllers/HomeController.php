<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
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
        if (Auth::user()->tempat_lahir!=null) {
            $z='20';
        }else{
            $z='0';
        }
        if (Auth::user()->agama!=null) {
            $x='20';
        }else{
            $x='0';
        }
        if (Auth::user()->alamat!=null) {
            $c='10';
        }else{
            $c='0';
        }
        if (Auth::user()->asal_sek!=null) {
            $v='10';
        }else{
            $v='0';
        }
        if (Auth::user()->tgl_lahir!=null) {
            $b='10';
        }else{
            $b='0';
        }
        if (Auth::user()->nik!=null) {
            $n='20';
        }else{
            $n='0';
        
        } if (Auth::user()->nisn!=null) {
            $m='10';
        }else{
            $m='0';
        
        } 
            $e=$z+$x+$c+$v+$b+$n+$m;
           

         $a=User::all();
        return view('home',compact('p','e','a'));
    }
}
