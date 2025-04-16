<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Club extends Model
{
  /** @use HasFactory<\Database\Factories\ClubFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'name',
    'phone',
    'email',
    'sport_id',
  ];

  /**
   * The relationship between the club and the sport.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function sport(): BelongsTo
  {
    return $this->belongsTo(Sport::class);
  }
}
