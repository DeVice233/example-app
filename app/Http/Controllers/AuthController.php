<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function showSignInForm()
    {
        return view('auth.SignIn');
    }

    public function showSignUpForm()
    {
        return view("auth.SignUp");
    }
    public function signIn(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)) {
            return redirect(route("posts"));
        }

        return redirect(route("signIn"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }
    public function logout()
    {
        auth("web")->logout();

        return redirect(route("posts"));
    }
    public function signUp(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"]
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user) {
            auth("web")->login($user);
        }
        return redirect(route("posts"));
    }
}
