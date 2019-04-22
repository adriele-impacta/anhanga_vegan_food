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
    //manterTipoProduto();
  //  feather.replace(); // iniciando icons
    $('[data-toggle="popover"]').popover(); // inicializando popover bootstrap




    var pageName = $("#pageName").val();

 /*   $("#frmSave").on('submit', function(e){
        e.preventDefault();
       
        var file_data = $('#files').prop('files'); 
        console.log(file_data);  
            $.ajax({
                type: 'POST',
                dataType: 'json',
                cache: false,
                processData: false,
                contentType: false,
                url: pageName + '.save.php',
//data: new FormData(this),
                data: new FormData($('#frmSave')[0]),
                success: function (retorno) {
                    var emptyFields = retorno.emptyFields;
        
                    if (emptyFields) {
                        for (var i = 0; i < emptyFields.length; i++) {
                            $("#" + emptyFields[i]).addClass('is-invalid');
                        }
                    }
                   else  if (retorno.statusCode) {
                        location = url + 'app/retorno.php?statusCode=' + retorno.statusCode;
                    }
                }
            });

        });*/
});


$('#add-TipoProduto').on('click', function () {
    var last_id = $('table tbody tr:last td:first').text();
    last_id = parseInt(last_id) + 1;
    $('table tbody').append('<tr><td>' + last_id + '</td><td contenteditable="true"></td> <td><a class="text-primary open" id="editar-row" data-page="TipoProduto" data-cod="' + last_id + '" data-action="update" href="javascript:"><span data-feather="edit"></span></a> <a class="text-danger open" id="delete-row" data-page="TipoProduto" data-cod="' + last_id + '" data-action="delete" href="javascript:"><span data-feather="trash-2"></span> </a></td></tr>');
    $('table tbody tr:last td:nth-child(2)').focus();
    //tableOptions();
    //manterTipoProduto();
    feather.replace();
});

//function manterTipoProduto() {
$('#editar-row').click(function () {
    console.log($(this).attr('data-cod'));
});
//}


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


//Abrir pagina
$('.open').click(function () {
    var data_page = $(this).data('page');
    var data_action = $(this).data('action');
    var data_cod = $(this).data('cod');

    var parametro = '?id=' + data_cod;
    if (data_cod != "") {
        window.location.href = url + 'app/' + data_page + '/' + data_action + '.php' + parametro;
    }
    else {
        window.location.href = url + 'app/' + data_page + '/' + data_action + '.php';
    }
});

$('.create').click(function () {
    var data_page = $(this).data('page');
    window.location.href = url + 'app/' + data_page + '/create.php';
}); // Abrir pagina de insert




$('#frmSave').find('input,select,textarea').blur(function () {
    if (!$(this).val()) {
        $(this).addClass('is-invalid');
    }
    else {
        $(this).removeClass('is-invalid');
    }
}); //Valida campo vazio form

//var pageName = $("#pageName").val();
/* $("#frmSave").submit(function (e) {
    var dados = $("#frmSave").serialize();
    var file = $('#files');
    console.log(dados);
    console.log(file);


    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: pageName + '.save.php',
        data: dados,
        success: function (retorno) {
            var emptyFields = retorno.emptyFields;

            if (emptyFields) {
                for (var i = 0; i < emptyFields.length; i++) {
                    $("#" + emptyFields[i]).addClass('is-invalid');
                }
            }
           else  if (retorno.statusCode) {
                location = url + 'app/retorno.php?statusCode=' + retorno.statusCode;
            }
        }
    });
    return false;
}); */
