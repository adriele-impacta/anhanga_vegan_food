function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#img_e").remove();
            $('#files + img').remove();
            $('#files').after('<img class="img-responsive" src="' + e.target.result + '" />');
        }
        reader.readAsDataURL(input.files[0]);
    }


}
$("#fileupload").change(function () {
    filePreview(this);
});