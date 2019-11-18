@extends('layouts.app')

@section('content')
<script src="/js/scripts/lista-reserva/index.js"></script>

<div class="container mb-2">
	<h2 class="sub-header">
        Lista de Reservas
    </h2>
	<br /> <br />
	<div class="table-responsive">
		<table id="tabelaLista"
			class="table table-striped  table-bordered sortable"
			style="width: 100%">
			<thead>
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Carro</th>
					<th>Data de Reserva</th>
					<th>Data de Devolução</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody id="tabela"></tbody>
			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
@endsection