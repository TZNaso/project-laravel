<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo view('home.index')->render();
    }

    public function recupera()
    {
        // echo
        return view('recuperar-senha.index')->render();
    }
}