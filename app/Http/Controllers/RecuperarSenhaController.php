<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecuperarSenhaController extends Controller
{
    public function index()
    {
        echo view('recuperar-senha/index')->render();
    }
}
