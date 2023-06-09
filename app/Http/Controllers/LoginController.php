<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

class LoginController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $arr = ['name' =>$request->name, 'password' =>$request->password];
        if(Auth::attempt($arr)){
            dd('thành công');
        }
        else{
            dd('thất bại');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }

    public function postLogin1(Request $request){
        $arr = ['name' =>$request->name, 'password' =>$request->password];
        if(Auth::attempt($arr)){
            return redirect()->route('show')->with('message','Thành công');
        }
        else{
            return redirect()->route('getLogin')->with('message','Thất bại');
        }
    }
}
