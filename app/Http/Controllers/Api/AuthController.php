<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $validated = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (!Auth::attempt($validated)) {
      return response()->json([
        'message' => 'Invalid credentials',
      ], 401);
    }

    $user = Auth::user();
    $token = $user->createToken('mobile')->plainTextToken;
    return response()->json([
      'token' => $token,
      'user' => $user
    ]);
  }

  public function register(Request $request)
  {
    $request->validate([
      'name' => ['required'],
      'email' => ['required', 'email', 'unique:users,email'],
      'password' => ['required', 'min:8', 'confirmed'],
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    $token = $user->createToken('mobile')->plainTextToken;
    return response()->json([
      'token' => $token,
      'user' => $user
    ]);
  }

  public function logout(Request $request)
  {
    $request->user()->currentAccessToken()->delete();
    return response()->json([
      'message' => 'Logged out'
    ]);
  }
}
