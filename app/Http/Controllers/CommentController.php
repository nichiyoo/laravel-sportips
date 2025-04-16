<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Sport;
use App\Models\User;

class CommentController extends Controller
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
    $users = User::all();

    return view('dashboard.sports.comments.create', [
      'sport' => $sport,
      'users' => $users,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreCommentRequest $request, Sport $sport)
  {
    $validated = $request->validated();

    $comment = Comment::create($validated);
    $sport->comments()->attach($comment);
    $comment->save();

    return redirect()
      ->route('admin.sports.show', [
        'sport' => $sport
      ])
      ->with('success', 'Comment created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Comment $comment)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Comment $comment)
  {
    $users = User::all();

    return view('dashboard.sports.comments.edit', [
      'comment' => $comment,
      'users' => $users,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCommentRequest $request, Comment $comment)
  {
    $validated = $request->validated();

    $comment->update($validated);

    return redirect()->back()
      ->with('success', 'Comment updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Comment $comment)
  {
    $comment->delete();

    return redirect()->back()
      ->with('success', 'Comment deleted successfully.');
  }
}
