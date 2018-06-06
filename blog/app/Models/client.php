<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class \client extends Model
{
  protected $fillable = [
      'name', 'address', 'number_address', 'bairro_address', 'city_address', 'RG',
      'CPF', 'born_date', 'work_local', 'spouse', 'email',
  ];
}
