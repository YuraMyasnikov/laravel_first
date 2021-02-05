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

        $formFields = $request->only(['email','remember_token']);

        // attempt попытка аутэентификации
        if(Auth::attempt($formFields))
        {
            return redirect()->intended(route('user.private'));
        }

        return redirect()->route('user.login')->withErrors(['email' => 'какая то хуйня']);

    }
}
