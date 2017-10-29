<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return "User Registered";
    }

    public function login()
    {
        return view("index");
    }

    public function show()
    {
        return "User Registration Form";
    }
}
