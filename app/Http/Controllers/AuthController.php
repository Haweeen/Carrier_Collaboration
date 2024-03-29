<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function register()
  {
    return view('auth.register');
  }

  public function store()
  {
    $validated = request()->validate(
      [
        'name' => 'required|min:3|max:40',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
      ]
    );

    $user = User::create(
      [
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password'])
      ]
    );
    return redirect()->route('pages-home')->with('success', 'Account Created Successfully');
  }

  public function login()
  {
    return view('auth.login');
  }
}
