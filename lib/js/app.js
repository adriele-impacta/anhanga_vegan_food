/*
monitorar_execucao("Total", function() {
    foreach ($planetas as $planeta) {
        monitorar_execucao("Planeta $planeta", function() { 
            popular($planeta);
        });
    }
});

É IGUAL
f(x) = x² + x
*/
const url = window.location.origin + "/anhanga_vegan_food/";
$(document).ready(function () {
    tableOptions(); //iniciando opções de Datatable
    $('[data-toggle="popover"]').popover(); // inicializando popover bootstrap
    var pageName = $("#pageName").val();
}); // Inicializador 



$('.cardapio').change(function (e) {
    var dia_semana = $(this).children("option:selected").val();
    var id_produto = $(this).attr('data-cod');

    $('.retorno').text('');
    $('.tr_bg').removeClass('danger');
    $('.tr_bg').removeClass('success');

    $('#retorno' + id_produto).text("Salvando...");

    $.ajax({
        url: url + 'index.php?pagina=produtos&acao=cardapio',
        type: "POST",
        data: { dia_semana: dia_semana, id_produto: id_produto },
        dataType: 'JSON',

    }).done(function (response) {
        $('#retorno' + id_produto).text(response.mensagem);
        if (response.erro == 0) {
            $('#tr' + id_produto).removeClass('danger');
            $('#tr' + id_produto).addClass('success');
        }
        else {
            $('#tr' + id_produto).removeClass('success');
            $('#tr' + id_produto).addClass('danger');
        }
    });
}); // Atualizacao cardapio


$('.sts_pedido').change(function (e) {
    var status_p = $(this).children("option:selected").val();
    var id_pedido = $(this).attr('data-cod');

    $('.retorno').text('');
    $('.tr_bg').removeClass('danger');
    $('.tr_bg').removeClass('success');

    $('#retorno' + id_pedido).text("Salvando...");

    $.ajax({
        url: url + 'index.php?pagina=pedidos&acao=muda_status',
        type: "POST",
        data: { status_p: status_p, id_pedido: id_pedido },
        dataType: 'JSON',

    }).done(function (response) {
        $('#retorno' + id_pedido).text(response.mensagem);
        if (response.erro == 0) {
            $('#tr' + id_pedido).removeClass('danger');
            $('#tr' + id_pedido).addClass('success');
        }
        else {
            $('#tr' + id_pedido).removeClass('success');
            $('#tr' + id_pedido).addClass('danger');
        }
    });
}); // Atualizacao status Pedido


$('#add-TipoProduto').on('click', function () {
    var last_id = $('table tbody tr:last td:first').text();
    last_id = parseInt(last_id) + 1;
    $('table tbody').append('<tr><td>' + last_id + '</td><td contenteditable="true" id="tipo_produto' + last_id + '" data-cod="' + last_id + '"></td><td class="acoes_tipo_produto"><a class="text-primary editar-row" id="editar-row' + last_id + '" data-cod="' + last_id + '" href="javascript:"><i class="far fa-edit"></i></a> <a class="text-danger open" id="delete-row" data-page="TipoProduto" data-cod="' + last_id + '" data-action="delete" href="javascript:"><i class="far fa-trash-alt"></i> </a></td></tr>');
    $('table tbody tr:last td:nth-child(2)').focus();
});

$('.acoes_tipo_produto').on('click', 'a.editar-row', function () {
    console.log($(this).attr('data-cod'));
}); // Content editable em Tipos de Produto

function tableOptions() {
    var table_page = $('table').attr('id');
    var class_table = $('.no-datatable').length; // no-datatable remove o plugin datatable de uma tabela
    if (table_page) {

        if (table_page == 'table-produtos') {
            init_order = 2;
        }
        else {
            init_order = 1;
        }

        if (class_table == 0) {
            var clean_table = $('.clean-table').length; // clean-table remove as opções de info, paginação e busca

            if (clean_table > 0) {
                $('#' + table_page).DataTable({
                    responsive: true,
                    order: [[init_order, "asc"]],
                    info: false,
                    paging: false,
                    searching: false,
                    scrollY: false,
                    //  dom: "<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'f>>" +
                    //  "<'row'<'col-sm-12'tr>>" +
                    //   "<'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                    language: {
                        url: url + 'lib/json/Portuguese.json'
                    },
                    columnDefs: [
                        { width: '2%', targets: 0 },
                        { width: '10%', targets: 's10' },
                        { targets: 'no-sort', orderable: false }
                    ]
                });
            } else {
                $('#' + table_page).DataTable({
                    responsive: true,
                    order: [[init_order, "asc"]],
                    // searching: false,
                    scrollY: false,
                    //  dom: "<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'f>>" +
                    //  "<'row'<'col-sm-12'tr>>" +
                    //   "<'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
                    language: {
                        url: url + 'lib/json/Portuguese.json'
                    },
                    columnDefs: [
                        { width: '2%', targets: 0 },
                        { width: '10%', targets: 's10' },
                        { targets: 'no-sort', orderable: false }
                    ]
                });
            }
        }
    }
} //Opções personalizadas do Datatable