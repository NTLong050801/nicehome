$(document).ready(function () {
    $('.input_cmt , ._icon , ._file,.hv_btn_save ,.lb_save').click(function () {
        $('.dis_popup').css("display", "block")
    })
    $('.close_popup').click(function () {
        $('.dis_popup').css("display", "none")
    })
})