<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\MUsuario;



class CLogin extends Controller
{

    public function redirect()
    {

        return Socialite::driver('google')->redirect();
        //return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        $socialiteUser = Socialite::driver('google')->user();

        //dd($socialiteUser->id);

        // Comprueba si el usuario ya existe en la base de datos y usuAuth es 'google'
        $user = MUsuario::where('id_user', $socialiteUser->id)
            ->where('usuAuth', 'google')
            ->first();


        if (!$user) {
            // Si no existe, crea un nuevo usuario en la base de datos
            $user = new MUsuario();
            // $user->idUsuario = 1; // Reemplaza $valor con el valor adecuado
            $user->id_user = $socialiteUser->id;
            $user->usuName = $socialiteUser->name;
            $user->usuEmail = $socialiteUser->email;
            $user->usuAvatar = $socialiteUser->avatar;
            $user->usuAvatar = $socialiteUser->avatar;
            $user->usuAuth = 'google';
            $user->save();
        }

        // Autentica al usuario en Laravel
        Auth::login($user);

        // Puedes personalizar la respuesta según tus necesidades
        return response()->json(['status' => 200, 'user' => $user]);
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook()
    {
        $socialiteUser = Socialite::driver('facebook')->user();

        $user = MUsuario::where('id_user', $socialiteUser->id)->first();


        if (!$user) {
            // Si no existe, crea un nuevo usuario en la base de datos
            $user = new MUsuario();
            // $user->idUsuario = 1; // Reemplaza $valor con el valor adecuado
            $user->id_user = $socialiteUser->id;
            $user->usuName = $socialiteUser->name;
            $user->usuEmail = $socialiteUser->email;
            $user->usuAvatar = $socialiteUser->avatar;
            $user->usuAvatar = $socialiteUser->avatar;
            $user->usuAuth = 'facebook';
            $user->save();
        }

        // Autentica al usuario en Laravel
        Auth::login($user);

        // Puedes personalizar la respuesta según tus necesidades
        return response()->json(['status' => 200, 'user' => $user]);
    }
}
