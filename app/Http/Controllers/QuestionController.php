<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {

    }


    public function show(Request $request, $day, $question)
    {
        $path = storage_path() . "/json/question_bank.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        $json = json_decode(file_get_contents($path), false);

        $question_number = (3 * ($day-1)) + $question -1;

        $set = $json->questions[$question_number];

        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');

        return view("game.question", ['day' => $day,'ques' => $question, 'set' => $set,
            'name' => $name,'email' => $email,'phone' => $phone]);
    }
}
