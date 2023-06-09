<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('register');
    }
    public function postRegister(){
        $user = new User;
        $user->name = $request->name;

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo thành công');
    }
}
