<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User as User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function register(Request $request){
        // Này dùng để kiểm tra data vừa tạo
        // dd($request->all()); 

        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = Carbon::now();

        $user = User::create($data);
        if ($user){
            Auth::login($user);
            if (Auth::check()){
                return redirect()->route('get.home');
            }
        }

        return redirect()->back();
    }
}
