$(document).ready(function () {
    var html = "";
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  '/listando',
        type: 'POST',
        dataType: 'json',
        success: function (retorno) {
            for (let i = 0; i < retorno.length; i++) {
                let dataRetorno = new Date(retorno[i].data);
                dataRetorno.setDate(dataRetorno.getDate()+1);
                let hoje = new Date();

                let subDate = Math.abs(dataRetorno.getTime() - hoje.getTime());
                let difDate = Math.ceil(subDate / (1000 * 3600 * 24));
                // difDate = difDate +1;

                let valor = retorno[i].valor * difDate;
                let data = new Date(retorno[i].data);
                data.setDate(data.getDate()+1);

                let dataReserva = new Date(retorno[i].data_reserva);
                dataReserva.setDate(dataReserva.getDate()+1);

                html = "<tr>";
                html += "<td>" + retorno[i].name + "</td>";
                html += "<td>" + retorno[i].email + "</td>";
                html += "<td>" + retorno[i].nome + "</td>";
                html += "<td>" + dataReserva.toLocaleDateString('pt-br') + "</td>";
                html += "<td>" + data.toLocaleDateString('pt-br') + "</td>";
                html += "<td>" + valor.toLocaleString('pt-br', { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' }) + "</td>";
                html += "</tr>";
                $("#tabela").append(html);
            }
        },
        statusCode: {
            500: function() {
                alert("Erro no servidor/banco de dados, favor recarregar a página");
                console.log('500 ');
            }
        }
    })
});