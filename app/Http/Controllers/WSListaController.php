<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\listaReservaModel;

class WSListaController extends Controller
{
    public function index()
    {
        return listaReservaModel::all();
    }

    public function store(Request $request)
    {
        listaReservaModel::create($request->all());
    }

    public function show($id)
    {
        return listaReservaModel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $reserva = listaReservaModel::findOrFail($id);
        $reserva->update($request->all());
    }

    public function destroy($id)
    {
        $reserva = listaReservaModel::findOrFail($id);
        $reserva->delete();
    }
}
