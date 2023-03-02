<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halaman()
    {
        return view('login');
    }
    public function login(Request $data)
    {
        //    return $data->all();
        $datalogin = $data->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        //    $datalogin['password'] = bcrypt($datalogin['password']);
        if (Auth::attempt($datalogin)) {
            $data->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back();
    }
}
