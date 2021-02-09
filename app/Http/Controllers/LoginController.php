<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use App\Models\User;

class LoginController extends Controller
{
    public function enter (Request $request)
    {

        if (Auth::check())
        {
            return redirect()->intended()->route('user.private');
        }

        $formFields = $request->only(['email','password']);

        // attempt попытка аутэентификации
        if(Auth::attempt($formFields))
        {
            $user = Auth::user();
            view('Admin/private', compact('user'));
            return redirect()->intended(route('user.private'));
        }

        return redirect()->route('user.login')->withErrors(['email' => 'Возможно такоей e-mail не зарегистрирован', 'password' => 'Возможно не верно введен пароль']);

    }
}
