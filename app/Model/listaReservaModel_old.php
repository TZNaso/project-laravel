<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class listaReservaModel extends Model
{
    protected $fillable = ['id_cliente', 'id_carro', 'data', 'data_reserva'];
    
    public function listaReserva($id_cliente)
    {
        $resultado = DB::table('users')
            ->join('reserva', 'reserva.id_cliente', '=', 'users.id')
            ->join('carro', 'carro.id', '=', 'reserva.id_carro')
            ->select('users.name', 'users.email', 'carro.nome', 'carro.valor', 'reserva.data', 'reserva.data_reserva')
            ->where('users.id', $id_cliente)
            ->get();

        return $resultado;
    }
}
