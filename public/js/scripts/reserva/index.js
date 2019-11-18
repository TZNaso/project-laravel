$(document).ready(function () {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  '/carregando',
        type: 'POST',
        dataType: 'json',
        success: function (retorno) {
            for (let i = 0; i < retorno.length; i++) {
                $("#inputGroupSelect01").append(`<option id="${retorno[i].id}" value="${retorno[i].quantidade}">${retorno[i].nome}</option>`);
            }
        },
        statusCode: {
            500: function() {
                alert("Erro no servidor/banco de dados, favor recarregar a página");
                console.log('500 ');
            }
        }
    });

    $("#inputGroupSelect01").change(function (){
        $("#qtt").text($("#inputGroupSelect01 option:selected").val()+' unidades disponíveis');
        $("#qtt").show();
    });

    $("#btnReserva").click(function () {
        console.log($("#example-date-input").val());
        var dataInput = new Date($("#example-date-input").val());
        dataInput.setDate(dataInput.getDate()+1);
        console.log(dataInput);
        var hoje = new Date();

        if(dataInput < hoje){
            $("#spanFalha").html(`<h3>Reserva Falhou, Data Inferior a Atual!</h3>`);
            $("#spanFalha").show('slow');
            setTimeout(function(){ $("#spanFalha").hide('slow'); }, 2000);
        }else{
            let hoje = new Date();
            
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:  '/reservando',
                type: 'POST',
                data:  {
                    date: $("#example-date-input").val(),
                    id_carro: $("#inputGroupSelect01 option:selected").attr('id'),
                    dataReserva: hoje.toISOString().split('T')[0],
                },
                dataType: 'json',
                success: function (retorno) {
                    updateReserva();
                    $("#spanSucesso").html(`<h3>${retorno}</h3>`);
                    $("#spanSucesso").show('slow');
                    $("#example-date-input").val('');
                    $('#inputGroupSelect01 option[value="selection"]').prop('selected', true);
    
                    setTimeout(function(){ $("#spanSucesso").hide('slow'); }, 2000);
                },
                statusCode: {
                    500: function() {
                        alert("Erro no servidor/banco de dados, favor recarregar a página");
                        console.log('500 ');
                    }
                }
            });
        }
    })
});

function updateReserva() {
    idOption = $("#inputGroupSelect01 option:selected").attr('id');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:  '/reservando/update',
        type: 'POST',
        data:  {
            id_carro: $("#inputGroupSelect01 option:selected").attr('id'),
            quantidade: $("#inputGroupSelect01 option:selected").val(),
        },
        dataType: 'json',
        success: function (retorno) {
            for (let i = 0; i < retorno.length; i++) {
                $(`#inputGroupSelect01 #${idOption}`).val(retorno[i].quantidade);
                $("#qtt").hide();
            }
        },
        statusCode: {
            500: function() {
                alert("Erro no servidor/banco de dados, favor recarregar a página");
                console.log('500 ');
            }
        }
    })
}