<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'messaggio' => 'Messaggio di benvenuto' 
        ];
        return view('home', $data);
    }

    public function contatti(){
        $data = [
            'email' => 'email@email.com' 
        ];
        return view('contatti', $data);
    }
}
