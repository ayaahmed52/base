<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Auth;
class AuthController extends Controller
{

    public function getLogin()
    {
        $settings = Setting::all()->pluck('value' , 'key');
        return view('admin.auth.login' , compact('settings'));
    }


    public function postLogin(LoginRequest $request)
    {
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return redirect()->route('admin.home') ;
        }else{
            return redirect()->route('admin.get_login') ;
        }
    }

}
