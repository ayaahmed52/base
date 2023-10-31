<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AuthController extends Controller
{

    public function login()
    {
        $settings = Setting::all()->pluck('value' , 'key');
        return view('admin.auth.login' , compact('settings'));
    }

}
