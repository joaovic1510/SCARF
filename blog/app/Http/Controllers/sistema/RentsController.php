<?php

namespace App\Http\Controllers\sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RentsController extends Controller
{
  public function historic(){
      return view('sistema.aluguel.historic');
  }
  public function newRental(){
      return view('sistema.aluguel.newRental');
  }
}
