<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lms_g50_carriers extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'address',
    'contact_name',
    'email',
    'phone',
    'description',
    'image',
  ];
}