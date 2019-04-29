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



$('.cardapio').change(function () {

    $.ajax({
        url: url + 'index.php?pagina=produtos&acao=cardapio&dia=3',
        type: "POST",
        data: { teste: "LOLOLOL" },

    }).done(function () {
        console.log('OKEIII');
    });
}); // Atualizacao cardapio






$('#add-TipoProduto').on('click', function () {
    var last_id = $('table tbody tr:last td:first').text();
    last_id = parseInt(last_id) + 1;
    $('table tbody').append('<tr><td>' + last_id + '</td><td contenteditable="true"></td> <td><a class="text-primary open" id="editar-row" data-page="TipoProduto" data-cod="' + last_id + '" data-action="update" href="javascript:"><i class="far fa-edit"></i></a> <a class="text-danger open" id="delete-row" data-page="TipoProduto" data-cod="' + last_id + '" data-action="delete" href="javascript:"><i class="far fa-trash-alt"></i> </a></td></tr>');
    $('table tbody tr:last td:nth-child(2)').focus();
    feather.replace();
});
$('#editar-row').click(function () {
    console.log($(this).attr('data-cod'));
}); // Content editable em Tipos de Produto

function tableOptions() {
    var table_page = $('table').attr('id');

    if (table_page == undefined) {
        console.log('pegar a tabelaaaa');
    }
    var class_table = $('.no-datatable').length; // no-datatable remove o plugin datatable de uma tabela
    if (table_page) {
        if (class_table == 0) {

            var clean_table = $('.clean-table').length; // clean-table remove as opções de info, paginação e busca

            if (clean_table > 0) {
                $('#' + table_page).DataTable({
                    responsive: true,
                    order: [[1, "asc"]],
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
                    order: [[1, "asc"]],
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

$('#frmSave').find('input,select,textarea').blur(function () {
    if (!$(this).val()) {
        $(this).addClass('is-invalid');
    }
    else {
        $(this).removeClass('is-invalid');
    }
}); //Valida campo vazio form