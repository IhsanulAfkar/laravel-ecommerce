<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        $findUser = User::where('google_id', $user->getId())->first();
        if (!$findUser) {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'google_img' => $user->getAvatar(),
                'cart' => '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]',
                'password' => Hash::make(Str::random(12)),
            ]);
            Auth::login($newUser);
            return redirect('/');
        }
        Auth::login($findUser);
        return redirect('/');
    }
}
