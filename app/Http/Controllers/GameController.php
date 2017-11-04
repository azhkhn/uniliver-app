<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 10/30/17
 * Time: 12:41 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\GameResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkIfLoggedIn', ['except' => 'home']);
    }

    public function home(Request $request) {
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');
        return view("home", ['name' => $name,'email' => $email,'phone' => $phone]);
    }

    public function start(Request $request)
    {
        //Log::info($request->session()->all());
        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');
        return view("startGame", ['name' => $name,'email' => $email,'phone' => $phone]);
    }


    public function result(Request $request, $day)
    {
        $q1res = 0; $q2res = 0; $q3res = 0;
        $email = $request->session()->get('email');
        $user = User::where('email', $email)
            ->orWhere('phone', $email)
            ->first();
        Log::info($user->email);
        $result_set = DB::table('game_results')
            ->whereColumn([
                ['userid', $user->id],
                ['day', $day]
            ])->orderBy('question', 'asc')->get();
        foreach ($result_set as $result) {
            Log::info($result->answer);
            if($result->question == 1) {
                $q1res = $result->answer;
            } elseif ($result->question == 2) {
                $q2res = $result->answer;
            } elseif ($result->question == 3) {
                $q3res = $result->answer;
            }
        }

        $name = $request->session()->get('name');
        $email = $request->session()->get('email');
        $phone = $request->session()->get('phone');

        return view("game.result", ['day' => 1,'q1res' => $q1res,'q2res' => $q2res,
            'q3res' => $q3res, 'name' => $name,'email' => $email,'phone' => $phone]);
    }

    public function processAnswer(Request $request)
    {
        Log::info($request->all());
        $day = $request->input('day');
        $question = $request->input('question');
        $answer= trim($request->input('answer'));
        $rindle = trim($request->input('rindle'));
        $result = false;
        if($answer==$rindle) {
            $result = true;
        }

        $email = $request->session()->get('email');
        $user = User::where('email', $email)
            ->orWhere('phone', $email)
            ->first();
        $gameresult = New GameResult();
        $gameresult->userid = $user->id;
        $gameresult->day = $day;
        $gameresult->question = $question;
        $gameresult->answer = $result;
        $gameresult->save();


        if($question >=3) {
            return redirect()->route('showResult',[$day]);
        } else {
            //return "true";
            return redirect()->route('showQuestion',[$day,($question + 1)]);
        }
    }
}