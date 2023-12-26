<?php

namespace App\Http\Controllers;

use App\Models\Registed_user;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function books(){
        return view('books');
    }
    public function home()
    {
        return view('home');
    }

    public function library()
    {
        return view('library');
    }
    public function login()
    {
        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }
    public function login_check(Request $request)
    {
        $valid = $request -> validate([
            'password' => 'required|min:8|max:100'
        ]);

    }
    public function registration_check(Request $request)
    {
        $valid = $request -> validate([
            'password' => 'required|min:8|max:100',
            'name' =>'required|min:2|max:100',
            'surname' => 'required|min:2|max:100'
        ]);
        $registered_user = new Registed_user();
        $registered_user ->name = $request->input('name');
        $registered_user ->surname = $request->input('surname');
        $registered_user ->email = $request->input('email');
        $registered_user ->password = $request->input('password');

        $registered_user -> save();

        return redirect() -> route('home');

    }

}
