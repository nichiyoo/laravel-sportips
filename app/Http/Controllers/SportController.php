<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Http\Requests\StoreSportRequest;
use App\Http\Requests\UpdateSportRequest;

class SportController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $sports = Sport::withCount('users')->get();

    return view('dashboard.sports.index', [
      'sports' => $sports,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('dashboard.sports.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreSportRequest $request)
  {
    $validated = $request->validated();

    Sport::create($validated);

    return redirect()
      ->route('admin.sports.index')
      ->with('success', 'Sport created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Sport $sport)
  {
    return view('dashboard.sports.show', [
      'sport' => $sport->load([
        'clubs',
        'contents',
        'comments',
        'users'
      ]),
    ]);
  }


  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Sport $sport)
  {
    return view('dashboard.sports.edit', [
      'sport' => $sport,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateSportRequest $request, Sport $sport)
  {
    $validated = $request->validated();

    $sport->update($validated);

    return redirect()
      ->route('admin.sports.index')
      ->with('success', 'Sport updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Sport $sport)
  {
    $sport->delete();
    return redirect()
      ->route('admin.sports.index')
      ->with('success', 'Sport deleted successfully.');
  }
}
