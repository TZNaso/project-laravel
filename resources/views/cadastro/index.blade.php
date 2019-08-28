@extends('layout.layout')

@section('content')
<div>
    <div class="container">
        <form action="Cadastro_Usuarios.php" method="POST">
            <br><br><br><br>
                <legend class="bg-info display-6 text-center">Cadastro de Usuários</legend>
                <!-- <img src="Imagens/Carro_Logo.png" class="rounded float-right" alt="Carro Logo" width="250px" hight="100px">     -->
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome Completo</span>
                </div>
                <input type="text" class="form-control col-sm-5" name="nome">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">CPF</span>
                </div>
                <input type="text" class="form-control col-sm-5" name="cpf" maxlength="11">
            </div>

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">E-mail</span>
                </div>
                <input type="email" class="form-control col-sm-5" name="email">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Confirmar E-mail</span>
                </div>
                <input type="email" class="form-control col-sm-5" name="confirma_email">
            </div>
            

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Telefone</span>
                </div>
                <input type="text" class="form-control col-sm-3" placeholder="(   ) 9 9999-9999" name="telefone">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Sexo</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="sexo">
                    <option selected>Escolha...</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1" min="8" max="8">CEP</span>
                </div>
                <input type="text" class="form-control col-sm-3" name="cep">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Endereço</span>
                </div>
                <input type="text" class="form-control col-sm-8" name="endereco">
            </div>

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Senha</span>
                </div>
                <input type="password" class="form-control col-sm-5" name="senha">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Confirmar Senha</span>
                </div>
                <input type="password" class="form-control col-sm-5" name="confirmacao">
            </div>

            <br>
            <input type="submit"  class="btn btn-info btn-lg btn-block" value="Cadastrar">
        </form>
    </div>
</div>
@endsection