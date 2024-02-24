<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
  protected $fillable = [
    'name', 'address', 'contact_number', 'email', 'website', 'type', 'status',
  ];
}
