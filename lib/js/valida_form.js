$('#frmSave').find('input,select,textarea').filter('[required]:visible').blur(function () {
    if (!$(this).val()) {
        $(this).addClass('is-invalid');
    }
    else {
        $(this).removeClass('is-invalid');
    }
}); //Valida campo vazio form