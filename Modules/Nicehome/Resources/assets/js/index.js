$('input').click(function () {
  $('.list_search').css("display", "block");
})
$("body").click(function (e) {
  if (e.target.className !== "txt-search") {
    $('.list_search').css("display", "none");
    
  }
});
$(window).scroll(function () {
  if ($(this).scrollTop() < 10) {
    $('.upTop').hide();
  } else {
    $('.upTop').show();
  }
});
$('.tab3').click(function () {
  statusNav = 1;
  $('.second_header').css('width', '0px')
  checkWidth = $('.second_header').css('width')
  if (checkWidth == '0px') {
    $('.second_header').animate({
      width: "250px",
    }, 50)
    $('.second_header,.close-menu-bar').css("display", "block")

  }
})

$('.second_header nav ul li').click(function () {
  if ($(window).width() <= 768) {
    dropdown = $(this).children('.dropdown-content');
    checkDisblay = dropdown.css("display");
    if (checkDisblay == "none") {
      dropdown.css({
        "display": "block"
      })

      // $('.second_header nav').css('overflow' ,'auto')
    } else {
      dropdown.css({
        "display": "none"
      })
    }
  }

  // $(this).children('.dropdown-content').css("display","block")

})
$('.close-menu-bar').click(function () {
  $('.second_header').animate({
    width: "100%",
  }, 500)
  $('.second_header ,.close-menu-bar').css("display", "none")

})
display_share = 0;
// $(document).on('click','body',function(){
//   if(display_share == 1){
//     $('.display_share').css('display', "none")
//     display_share = 0;
//     console.log('123')
//   }
// })
$('.share_right').click(function () {
  $('.display_share').css('display', "flex")

  
})
// $("body").click(function (e) {
//   nameDiv = e.target.className;
  
 
// });
$(document).click(function (e)
{
    // Đối tượng container chứa popup
    var container = $(".display_share");
 
    // Nếu click bên ngoài đối tượng container thì ẩn nó đi
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.hide();
    }
    if(container.is(e.target)){
      $('.display_share').css('display', "flex")
    }
});



