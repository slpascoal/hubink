<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($user = User::query()->where('email', $request->get('email'))->first())
        {
            if(Hash::check($request->get('password'), $user->password))
            {
                auth()->login($user);

                return to_route('dashboard');
            }
        }

        return back()->with(['message' => 'usuário não encontrado']);
    }
}
