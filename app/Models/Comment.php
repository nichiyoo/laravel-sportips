<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
  /** @use HasFactory<\Database\Factories\CommentFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'body',
    'sport_id',
    'user_id',
  ];

  /**
   * The relationship between the comment and the sport.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function sport(): BelongsTo
  {
    return $this->belongsTo(Sport::class);
  }

  /**
   * The relationship between the comment and the user.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
