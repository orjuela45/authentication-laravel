<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToMicrosoft(){
        return Socialite::driver('microsoft')->redirect();        
    }

    public function handleMicrosoftCallback(){
        $data = Socialite::driver('microsoft')->user();
        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        Auth::login($user);
        return redirect()->route('home');        
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();        
    }

    public function handleGoogleCallback(){
        $data = Socialite::driver('google')->user();     
        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        Auth::login($user);
        return redirect()->route('home');    
    }

    public function redirectToOrcid(){
        return Socialite::driver('orcid')->redirect();        
    }

    public function handleOrcidCallback(){
        $data = Socialite::driver('orcid')->user();     
        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        Auth::login($user);
        return redirect()->route('home');       
    }
}
