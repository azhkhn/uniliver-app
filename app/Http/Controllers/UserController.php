<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /**
     * UserController constructor.
     */
    public function __construct()
    {

    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $request->session()->put(['name'=> $name,'email'=> $email,'phone'=> $phone,]);
        return "true";
    }

    public function login()
    {
        return view("login");
    }

    public function show(Request $request)
    {
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');
        return view("startGame");
        //return "Dear: $name , you are registed by the email: $email and your phone number is: $phone";
    }
}
