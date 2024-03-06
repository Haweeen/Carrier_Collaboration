<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lms_g50_carriers extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'name',
    'address',
    'contact_name',
    'email',
    'phone',
    'description',
    'image',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
