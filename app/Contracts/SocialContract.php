<?php

namespace App\Contracts;

use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Contracts\User;

interface SocialContract
{
    public function saveUser(User $user);
}
