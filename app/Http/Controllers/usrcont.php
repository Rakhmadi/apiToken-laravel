<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use validator;
class usrcont extends Controller
{
    public function profile(){
        if (Auth::user()->tempat_lahir==null) {
            $z='20';
        }else{
            $z='0';
        }
        if (Auth::user()->agama==null) {
            $x='20';
        }else{
            $x='0';
        }
        if (Auth::user()->alamat==null) {
            $c='10';
        }else{
            $c='0';
        }
        if (Auth::user()->asal_sek==null) {
            $v='10';
        }else{
            $v='0';
        }
        if (Auth::user()->tgl_lahir==null) {
            $b='10';
        }else{
            $b='0';
        }
        if (Auth::user()->nik==null) {
            $n='20';
        }else{
            $n='0';
        
        } if (Auth::user()->nisn==null) {
            $m='10';
        }else{
            $m='0';
        
        } 
            $e=$z+$x+$c+$v+$b+$n+$m;
           
        return view('profile',compact('e'));
    }
    public function editprofile(Request $req){
        return view('editprofile');
    }
    public function savesprofile(Request $req){
  
       $e=User::findorfail(Auth::user()->id);
        $e->name=$req->get('name');
        $e->email=$req->get('email');
        $e->username=$req->get('username');
        $e->gender=$req->get('gender');
        $e->log='blom di terima';
        $e->tempat_lahir=$req->get('tempat_lahir');
        $e->agama=$req->get('agama');
        $e->alamat=$req->get('alamat');
        $e->asal_sek=$req->get('asal_sek');
        $e->tgl_lahir=date($req->get('tgl_lahir'));
        $e->nik=$req->get('nik');
        $e->nisn=$req->get('nisn');
        $e->update();
       
        return redirect('/profile');
        
    }
    public function prod(){
        return view('prodi_page');
    }
}
