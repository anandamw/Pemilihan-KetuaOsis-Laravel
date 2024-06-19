<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {



        return redirect('/login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'nis' => 'required',
                'password' => 'required',
            ],
            [
                'nis.required' => "nis Tidak Boleh Kosong",
                'password.required' => "Password Tidak Boleh Kosong",
            ]
        );

        $credentials = $request->only(['nis', 'password']);


        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return redirect('/dashboard');
                    break;
                case 'kandidat':
                    return redirect('/dashboard');
                    break;
                default:
                    return redirect('/login')->withErrors('Role Tidak Valid')->withInput();
            }
        } else {
            return redirect('/login')->withErrors('nis atau Password Salah')->withInput();
        }
    }
}
