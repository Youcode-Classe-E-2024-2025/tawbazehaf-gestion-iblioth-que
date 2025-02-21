<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        if (Auth::id() !== $user->id) {
            abort(403);
        }
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        if (Auth::id() !== $user->id) {
            abort(403);
        }
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);
    
        $user->update($validated);
    
        return redirect()->route('users.show', $user)->with('success', 'Profile updated successfully!');
    }
    
}