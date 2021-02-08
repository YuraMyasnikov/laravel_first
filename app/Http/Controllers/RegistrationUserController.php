<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationUserController extends Controller
{

    public function save (Request $request)
    {

        $myValid = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        // Проверка на уникальность                  (существует)
        if(User::where('email', $myValid['email'])->exists())
        {
            return redirect()->route('user.registration')->withErrors([
                'email' => $myValid['email'].' уже зарегестрирован',
                ]);
        };

                        //!!!!!!!!!!!! непонятно что происходит
        $user = User::create($myValid);
        if ($user)
        {

            Auth::login($user);
            return redirect()->route('user.private')->withErrors([
                'formError' => 'Какая то хуйня при регистрации пользователя'
            ]);
        }

        return redirect()->route('user.login')->withErrors(['email' => 'какая то хуйня']);
    }

}
