<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Comment;
use App\Models\Sport;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $user_count = User::count();
    $club_count = Club::count();
    $sport_count = Sport::count();
    $comment_count = Comment::count();

    return view('dashboard.index', [
      'user_count' => $user_count,
      'club_count' => $club_count,
      'sport_count' => $sport_count,
      'comment_count' => $comment_count,
    ]);
  }
}
