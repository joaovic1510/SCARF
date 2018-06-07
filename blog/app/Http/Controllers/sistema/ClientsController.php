<?php

namespace App\Http\Controllers\sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
  public function newClient(){
      return view('sistema.cliente.newClient');
  }
  public function clients(){
      return view('sistema.cliente.clients');
  }
}
