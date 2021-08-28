<?php

namespace App\Services;

use App\Contracts\SocialContract;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User;
use App\Models\User as UserModel;

class SocialService implements SocialContract
{

    public function saveUser(User $user)
    {
        $currentUser = UserModel::whereEmail($user->getEmail())->first();
        if ($currentUser) {
            $currentUser->name = $user->getName();
            $currentUser->avatar =$user->getAvatar();
        } else {
            $currentUser = UserModel::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
            ]);
        }
        return Auth::loginUsingId($currentUser->id);
    }
}
