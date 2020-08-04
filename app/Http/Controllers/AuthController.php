<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view("register");
    }

    public function welcome(Request $req)
    {
        $firstName = $req["fname"];
        $lastName = $req["lname"];

        return view("welcome_user", ["firstName" => $firstName], ["lastName" => $lastName]);
    }
}
