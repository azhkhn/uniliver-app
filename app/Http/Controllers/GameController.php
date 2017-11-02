<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 10/30/17
 * Time: 12:41 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public function __construct()
    {

    }

    public function start(Request $request)
    {
        Log::info($request->session()->all());
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');
        return view("startGame", ['name' => $name,'email' => $email,'phone' => $phone]);
    }


    public function day1Ques1(Request $request)
    {

        return view("game.question", ['day' => 1,'ques' => 1]);
    }

    public function day1Ques2(Request $request)
    {
        return view("game.question", ['day' => 1,'ques' => 2]);
    }

    public function day1Ques3(Request $request)
    {
        return view("game.question", ['day' => 1,'ques' => 3]);
    }

    public function day1result(Request $request)
    {
        return view("game.result_form", ['day' => 1]);
    }



    public function processAnswer(Request $request)
    {
        $day = $request->input('day');
        $question = $request->input('question');
        $answer = $request->input('answer');

        $email = $request->session()->get('email');
        $user = User::$user = User::where('email', $email)
            ->orWhere('phone', $email)
            ->first();



        Log::info("day: " .  $day . "question: " .  $question . "answer: " .  $answer);
        if($question >=3) {
            return "/game/d1result";
        } else {
            return "true";
        }
    }
}