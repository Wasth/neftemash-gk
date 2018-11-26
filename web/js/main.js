
$('div[data-toggle=modal] div').on('click',function () {
    let link = '';
    link = $(this).attr('style').split('\'')[1];
    $('#exampleModal img').attr('src', link);
    $("#exampleModal").modal('show');
});