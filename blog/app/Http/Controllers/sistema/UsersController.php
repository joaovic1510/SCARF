<?php

namespace App\Http\Controllers\sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function account(){
        return view('sistema.usuario.account');
    }
    public function newUser(){
        return view('sistema.usuario.newUser');
    }
    public function users(){
        return view('sistema.usuario.users');
    }
}
