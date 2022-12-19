<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{

    public function showLoginForm()
    {


        session()->put('user_url', Redirect::back()->getTargetUrl());
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ['required', "confirmed"],
            "firstName" => ['required', 'string'],
            "secondName" => ['required', 'string'],
        ]);


        $user = User::create([
            "name" => $data["firstName"],
            "second_name" => $data["secondName"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),

        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect(session()->pull('user_url'));

    }

    public function logout()
    {
        auth("web")->logout();
        return redirect()->back();

    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ['required'],
        ]);



        if (auth("web")->attempt($data)) {

            return redirect(session()->pull('user_url'));


        }
        return redirect(route('login'));


    }


}
