<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
  /** @use HasFactory<\Database\Factories\ContentFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'title',
    'body',
    'video_url',
    'sport_id',
  ];

  /**
   * The relationship between the content and the sport.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function sport(): BelongsTo
  {
    return $this->belongsTo(Sport::class);
  }
}
