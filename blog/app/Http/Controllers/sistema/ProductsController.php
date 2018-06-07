<?php

namespace App\Http\Controllers\sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
  public function newProduct(){
      return view('sistema.produtos.newProduct');
  }
  public function products(){
      return view('sistema.produtos.products');
  }
}
