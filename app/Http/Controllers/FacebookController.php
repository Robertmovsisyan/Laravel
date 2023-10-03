<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    //
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback(){
        try {
            $user=Socialite::driver('facebook')->user();
            dd($user);
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
}
