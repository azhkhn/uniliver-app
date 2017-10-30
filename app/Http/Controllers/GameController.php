<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 10/30/17
 * Time: 12:41 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController
{
    public function __construct()
    {

    }

    public function start(Request $request)
    {
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');
        return view("startGame", ['name' => $name,'email' => $email,'phone' => $phone]);
    }
    public function dayQues(Request $request, $day, $ques)
    {
        return view("game.question", ['day' => $day,'ques' => $ques]);
    }
}