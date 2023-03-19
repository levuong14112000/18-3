<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        return view('login');
    }

    public function doLogin(Request $request){
        $data = [
            'username' => $request->login_username,
            'password' => $request->login_password
        ];
        if(Auth::attempt($data)){
            return redirect('/admin');
        }else{
            dump(false);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
