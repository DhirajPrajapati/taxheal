// ! Navabr

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 90) {
      $(".navbar-b").css("background", "black");
    } else {
      $(".navbar-b").css("background", "0,0,0,.5");
    }
  });
});
