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

    public function saveAnswer(Request $request, $user, $day, $question)
    {
        return "Question " . $question ." of Day " . $day ." from User: " . $user;
    }

    public function show($day, $question)
    {
        return "Question $question of Day $day";
    }
}
