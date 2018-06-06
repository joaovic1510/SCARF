<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rent extends Model
{
  protected $fillable = [
      'event_date', 'local_event', 'withdrawal_day', 'return_day', 'comments', 'final_rental_price',
      'status_id', 'client_id', 'product_id', 'user_id',
  ];
}
