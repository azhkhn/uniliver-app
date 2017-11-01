<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    private function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
        ]);
    }

    private function attemptLogin(Request $request)
    {
        $username = $request->input('email');
        $user = User::where('email', $username)
            ->orWhere('phone', $username)
            ->first();
        Log::info("count: " .  $user->email);
        if($user != null) {
            return true;
        }
        return false;
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);


        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();
            $request->session()->put('name', $request->input('name'));
            $request->session()->put('email', $request->input('email'));
            $request->session()->put('phone', $request->input('phone'));

            return redirect()->route('game');
        }
    }

    public function logout(Request $request) {
        $request->session()->invalidate();
        return redirect('/game');
    }
}
