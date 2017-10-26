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

    }

    public function show($day, $question)
    {
        return "Question 1 of Day 1";
    }
}
