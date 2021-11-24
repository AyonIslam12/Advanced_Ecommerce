<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        $loginData=$request->only('email','password');
        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            //toastr()->success("Welcome To Admin Panel.");
          return redirect()->route('admin.dashboard');
        }else{
            toastr()->error("These credentials do not match our records.");
            return redirect()->back();
         
      }
    }

    public function logout(){
        Auth::logout();
        toastr()->success("Logout Success.");
        return redirect()->route('admin.login');

    }
}
