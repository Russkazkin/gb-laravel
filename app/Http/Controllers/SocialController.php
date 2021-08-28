<?php

namespace App\Http\Controllers;

use App\Contracts\SocialContract;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialController extends Controller
{
    public function redirect(string $social): RedirectResponse
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback(string $social, SocialContract $service)
    {
        $user = Socialite::driver($social)->user();
        if ($service->saveUser($user)) {
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
