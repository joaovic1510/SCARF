<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $fillable = [
      'description', 'rental_price', 'sale_price', 'size', 'decote', 'bordado',
      'color', 'comprimento', 'extras', 'modelo', 'manga', 'tecido', 'available',
  ];
}
