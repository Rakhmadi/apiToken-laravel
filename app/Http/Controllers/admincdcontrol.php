<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
class admincdcontrol extends Controller
{
    public function postLogin(Request $request)
  {
      // Validate the form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);
      // Attempt to log the user in
      // Passwordnya pake bcrypt
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('/admin');
    } else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/user');
    }
  }
  public function adm(){
      $e=
      Auth::check()
      ;
      return view('admin.admin',compact('e'));

  }
  public function logout(){
    Auth::guard('admin')->logout();
    return response()->json('Success');
    
  }
}
