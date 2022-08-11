$(document).ready(function () {
    $('.btn_view_all').click(function () {
        // alert('123')
        $('.cmt_item:last').css("display", "flex");
        $(this).css("display", 'none');
    })
    $('.input_cmt , ._icon , ._file').click(function () {
        $('.dis_popup').css("display", "block")
    })
    $('.close_popup').click(function () {
        $('.dis_popup').css("display", "none")
    })
})