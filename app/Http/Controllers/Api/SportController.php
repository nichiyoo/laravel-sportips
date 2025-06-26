<?php

namespace App\Http\Controllers\Api;

use App\Models\Sport;
use App\Http\Controllers\Controller;

class SportController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $sports = Sport::withCount('users')->get();
    return response()->json($sports);
  }

  /**
   * Show the the resource.
   */
  public function show(Sport $sport)
  {
    $sport->load('contents');
    return response()->json($sport);
  }
}
