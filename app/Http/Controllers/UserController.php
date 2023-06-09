<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|name',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/product/showproduct');
        }

        return redirect()->back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function postLogin(Request $request)
    {
        $arr = ['name' =>$request->name, 'password' =>$request->password];
        if(Auth::attempt($arr)){
            return redirect()->route('products.index1')->with('message','Thành công');
        }
        else{
            return redirect()->route('login')->with('message','Thất bại');
        }
    }

    public function showRegisterForm()
    {
        return view('register.index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->intended('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

