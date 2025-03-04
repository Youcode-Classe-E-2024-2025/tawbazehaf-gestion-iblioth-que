<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;


class AuthController extends Controller
{
    public function store(){
        $validation = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)->max(14), 'confirmed']
        ]);

        $user = User::create($validation);
        
        Auth::login($user);

        return redirect('/books');
    }
}