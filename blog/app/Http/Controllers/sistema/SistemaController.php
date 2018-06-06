<?php

namespace App\Http\Controllers\sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SistemaController extends Controller
{
    public function index(){
        return view('sistema.home.index');
    }
    public function home(){
        return view('sistema.home.home');
    }

}
