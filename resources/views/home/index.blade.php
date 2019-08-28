@extends('layout.layout')

@section('content')
<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="Inicial.php" method="POST">
        <legend class="bg-info display-6 text-center">Realize o Login</legend>
        <br>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="input-group-text col-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="input-group-text col-sm" id="exampleInputPassword1">
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <button type="submit" class="btn btn-info btn-block">Entrar</button>
            </div>
            <div class="col-sm">
                <a href="{{ url('/recuperar-senha') }}"><button type="button" class="btn btn-info btn-block">Recuperar Senha</button></a>
            </div>
        </div>
        <br>
        <a href="{{ url('/cadastro') }}"><button type="button" class="btn btn-info btn-block" >Cadastre-se</button></a>
    </form>
</div>
@endsection