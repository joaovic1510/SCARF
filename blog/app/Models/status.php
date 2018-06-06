<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class \status extends Model
{
  protected $fillable = [
      'id', 'description',
  ];

    public $timestamps = false;
}
