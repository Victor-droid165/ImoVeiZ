<?php

namespace App\Http\Controllers\Auth\SocialAccounts;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function loginUsingGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callbackFromGithub()
    {
        try {
            $user = Socialite::driver('github')->user();
            $saveUser = User::updateOrCreate([
                'github_id' => $user->getId(),
            ],[
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => Hash::make($user->getName().'@'.$user->getId())
                    ]);

            Auth::loginUsingId($saveUser->id);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}