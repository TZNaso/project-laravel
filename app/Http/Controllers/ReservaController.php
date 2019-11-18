<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\reservaModel;

class ReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('reserva.index');
    }

    public function ajaxGetCarrosAction()
    {
        $objReserva = new reservaModel;
        $retorno = $objReserva->getCarros();

        echo json_encode($retorno);

        die();
    }

    public function ajaxSaveAction(Request $request)
    {
        $date = $request->post('date');
        $id_carro = $request->post('id_carro');
        $dataReserva = $request->post('dataReserva');
        $id_cliente = auth()->user()->id;

        $objReserva = new reservaModel;
        $retorno = $objReserva->saveReserva($id_cliente, $date, $id_carro, $dataReserva);

        echo json_encode($retorno);

        die();
    }

    public function ajaxUpdateAction(Request $request)
    {
        $id_carro = $request->post('id_carro');
        $quantidade = $request->post('quantidade');

        $objReserva = new reservaModel;
        $retorno = $objReserva->updateReserva($id_carro, $quantidade);

        echo json_encode($retorno);

        die();
    }
}
