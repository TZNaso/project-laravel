@extends('layouts.app')

@section('content')
<script src="/js/scripts/reserva/index.js"></script>

<div class="container mb-2">
    <span id="spanSucesso" class="badge badge-success offset-4" style="display:none;"></span>
    <span id="spanFalha" class="badge badge-danger offset-4" style="display:none;"></span>
    
    <br><br><br><br>
    <legend class="text-center bg-info display-6">Realização de Reserva de Carros</legend>
    <br><br>

    <div class="input-group mb-4">
        <span class="input-group-text" id="basic-addon1">Data de Devolução do Carro</span>
        <div class="col-8">
            <input class="form-control" type="date" name="data_devolucao" id="example-date-input">
        </div>
    </div>
  
    <div class="input-group mb-4">
        <div class="input-group-prepend d-inline">
            <label class="input-group-text" for="inputGroupSelect01">Marca do Carro</label>
        </div>
        <select class="custom-select col-8 d-inline" id="inputGroupSelect01" name="id_carro">
            <option id="selection" value="selection" selected>Selecione...</option>
        </select>
        <label id="qtt" class="input-group-text" style="display:none;"></label>
    </div>

    <input id="btnReserva" type="submit" class="btn btn-secundary" value="Reservar">
</div>
@endsection