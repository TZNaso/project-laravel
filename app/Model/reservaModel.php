<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
// use Exception;
use DB;

class reservaModel extends Model
{
    protected $fillable = ['id_cliente', 'id_carro', 'data', 'data_reserva'];

    public function saveReserva($id_cliente, $date, $id_carro, $dataReserva)
    {
        $data = array('id_cliente' => $id_cliente, 'id_carro' => $id_carro, 'data' => $date, 'data_reserva' => $dataReserva);

        DB::table('lista_reserva_models')->insert($data);

        return 'Reserva Realizada com Sucesso!';
    }

    public function getCarros()
    {
        $carros = DB::table('carro')->select('id', 'nome', 'quantidade')->get();
        return $carros;
    }

    public function updateReserva($id_carro, $quantidade)
    {
        DB::table('carro')->where('id',  $id_carro)->update(['quantidade' => $quantidade -1]);

        $quantidade = $this->getNewQuantidade($id_carro);
        return $quantidade;
    }

    public function getNewQuantidade($id_carro)
    {
        $newQuantidade = DB::table('carro')->where('id',  $id_carro)->select('quantidade')->get();

        return $newQuantidade;
    }
}
