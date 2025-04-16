<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use App\Models\Sport;

class ContentController extends Controller
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
    return view('dashboard.sports.contents.create', [
      'sport' => $sport,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreContentRequest $request, Sport $sport)
  {
    $validated = $request->validated();

    $content = Content::create($validated);
    $sport->contents()->attach($content);
    $content->save();

    return redirect()
      ->route('admin.sports.show', [
        'sport' => $sport
      ])
      ->with('success', 'Content created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Content $content)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Content $content)
  {
    return view('dashboard.sports.contents.edit', [
      'content' => $content,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateContentRequest $request, Content $content)
  {
    $validated = $request->validated();

    $content->update($validated);

    return redirect()->back()
      ->with('success', 'Content updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Content $content)
  {
    $content->delete();

    return redirect()->back()
      ->with('success', 'Content deleted successfully.');
  }
}
