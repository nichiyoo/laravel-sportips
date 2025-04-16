<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Http\Requests\StoreClubRequest;
use App\Http\Requests\UpdateClubRequest;
use App\Models\Sport;

class ClubController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Sport $sport)
  {
    return view('dashboard.sports.clubs.create', [
      'sport' => $sport,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreClubRequest $request, Sport $sport)
  {
    $validated = $request->validated();

    $club = Club::create($validated);
    $sport->clubs()->attach($club);
    $club->save();

    return redirect()
      ->route('admin.sports.show', [
        'sport' => $sport
      ])
      ->with('success', 'Club created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Club $club)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Club $club)
  {
    return view('dashboard.sports.clubs.edit', [
      'club' => $club,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateClubRequest $request, Club $club)
  {
    $validated = $request->validated();
    $club->update($validated);

    return redirect()->back()
      ->with('success', 'Club updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Club $club)
  {
    $club->delete();

    return redirect()->back()
      ->with('success', 'Club deleted successfully.');
  }
}
