@extends('layout.layout')

@section('content')
<div>
    <div>
        <br><br><br><br>
        <!-- <img src="Imagens/Carro_Logo.png" class="rounded float-right" alt="Carro Logo" width="150px" hight="75px"> -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            
        <form action="Enviar_Senha.php" method="POST">
            <legend class="bg-info display-6 text-center">Recuperação de Senha</legend>
            <br>
            <div class="form-group">
                <label>E-mail cadastrado</label>
                <input type="email" name="email" class="input-group-text col-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label>CPF cadastrado</label>
                <input type="text" name="cpf" class="input-group-text col-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br>  
            <button type="submit" class="btn btn-info btn-block col-sm">Recuperar Senha</button>
            <br>
            <a href="{{ url('/cadastro') }}"><button type="button" class="btn btn-info btn-block" >Cadastre-se</button></a>
        </form>
    </div>
</div>
@endsection