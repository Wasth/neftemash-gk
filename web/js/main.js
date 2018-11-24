
$('div[data-toggle=modal] img').on('click',function () {
    $('#exampleModal img').attr('src', $(this).attr('src'));
});