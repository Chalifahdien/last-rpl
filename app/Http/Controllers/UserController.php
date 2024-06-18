<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('USER/index',['tittle' => ' ','name' => 'Chalifahdien Hamud']);
    }
}
