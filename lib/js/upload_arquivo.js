function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#img_e").remove();
            $('#files + img').remove();
            $('#files').after('<img src="' + e.target.result + '" width="450"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }


}
$("#fileupload").change(function () {
    filePreview(this);
});