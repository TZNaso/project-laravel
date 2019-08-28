@extends('layout.layout')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <b><a class="navbar-brand" href="#">Locadora de Carros</a></b>
        <!-- <img src="Imagens/Carro_Logo.png" class="rounded img-fluid" alt="Carro Logo" width="100px" hight="75px"> -->
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Lista de Reservas</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-danger" type="submit">sair</button>
            </form>
        </div>
    <nav>
</div>

<div class="container mb-2">
    <form action="Reservar.php" method="POST">
        <br><br><br><br>
        <legend class="bg-info display-6 text-center">Realização de Reserva de Carros</legend>
        <!-- <img src="Imagens/Carro_Logo.png" class="rounded float-right" alt="Carro Logo" width="250px" hight="100px"> -->

        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">Data de Devolução do Carro</span>
            <div class="col-8">
                <input class="form-control" type="date" name="data_devolucao" id="example-date-input">
            </div>
        </div>
      
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Marca do Carro</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="id_carro">
                <option selected>Escolha...</option>
                <option value="AAA7845">Ford</option>
                <option value="BBB7845">Fiat</option>
                <option value="CCC7845">Renault</option>
                <option value="DDD7845">Chevrolet</option>
                <option value="EEE7845">Hyundai</option>
                <option value="FFF7845">Peugeot</option>
                <option value="GGG7845">Nissan</option>
                <option value="HHH7845">Honda</option>
                <option value="III7845">Jeep</option>
            </select>
        </div>

        <input name="id_cliente" class="input-group-text col-sm" id="exampleInputEmail1" aria-describedby="emailHelp" type="hidden">
        <input type="submit"  class="btn btn-info btn-lg btn-block" value="Reservar">
    </form>
</div>
@endsection