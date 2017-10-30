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


    public function day1Ques1(Request $request)
    {
        return view("game.question", ['day' => 1,'ques' => 1, 'action' => '/game/d1q2']);
    }

    public function day1Ques2(Request $request)
    {
        return view("game.question", ['day' => 1,'ques' => 2, 'action' => '/game/d1q3']);
    }

    public function day1Ques3(Request $request)
    {
        return view("game.question", ['day' => 1,'ques' => 3, 'action' => '/game/d1result']);
    }

    public function day1result(Request $request)
    {
        return view("game.result", ['day' => 1]);
    }



    public function processAnswer(Request $request)
    {
        $day = (int)$request->input('day');
        $nextQues = 0;
        if($request->input('ques') <3) {
            $nextQues = ((int)$request->input('ques')) + 1;
            return redirect('game/'.$day.'/'.$nextQues);
        }


    }
}