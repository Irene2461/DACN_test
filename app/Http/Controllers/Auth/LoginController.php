<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $data = $request->except('_token');
        if (Auth::attempt($data)){
            return redirect()->route('get.home');
        }
        return redirect()->back();
    }

    public function loginGuideGoRent(Request $request){
        $data = $request->except('_token');
        if (Auth::attempt($data)){
            return redirect()->route('get.guideline.go_rent.index');
        }
        return redirect()->back();
    }

    public function loginGuideDoRent(Request $request){
        $data = $request->except('_token');
        if (Auth::attempt($data)){
            return redirect()->route('get.guideline.do_rent.index');
        }
        return redirect()->back();
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('get.home');
    }
    
}
