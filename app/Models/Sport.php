<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sport extends Model
{
  /** @use HasFactory<\Database\Factories\SportFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'name',
    'image',
    'description',
  ];

  /**
   * The relationship between the sport and the club.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function clubs(): HasMany
  {
    return $this->hasMany(Club::class);
  }

  /**
   * The relationship between the sport and the comment.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function comments(): HasMany
  {
    return $this->hasMany(Comment::class);
  }

  /**
   * The relationship between the sport and the content.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function contents(): HasMany
  {
    return $this->hasMany(Content::class);
  }

  /**
   * The relationship between the sport and like.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function users(): BelongsToMany
  {
    return $this->belongsToMany(User::class, 'liked_sports')->withTimestamps();
  }
}
