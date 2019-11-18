<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\listaReservaModel;

class ListaReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('lista-reserva.index');
    }

    public function ajaxGetReservaAction()
    {
        $id_cliente = auth()->user()->id;

        $objReserva = new listaReservaModel;
        $retorno = $objReserva->listaReserva($id_cliente);

        echo json_encode($retorno);
        
        die();
    }
}