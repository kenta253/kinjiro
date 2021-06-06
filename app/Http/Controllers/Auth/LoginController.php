<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private const GUEST_USER_ID = 1;

    // ゲストログイン処理
    public function guestLogin()
    {
    // id=1 のゲストユーザー情報がDBに存在すれば、ゲストログインする
    if (Auth::loginUsingId(self::GUEST_USER_ID)) {
        return redirect('/home');
    }

    return redirect('/');
  }


    use AuthenticatesUsers;

    protected $maxAttempts = 5;
    protected $decayMinutes = 1;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
