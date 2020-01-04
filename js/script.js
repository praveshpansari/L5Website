$(window).on('load', function () {
    $('.preloader').fadeOut('slow');
    $('.preloader-wrapper').fadeOut('slow');
});

$('.dropdown-button').dropdown(
    {
        alignment: 'left',
        coverTrigger: false,
        hover: true,
        gutter: 0
    });

$(document).ready(function () {
    $('select').formSelect();
    $('.sidenav').sidenav();
    $('.slide2').sidenav({
        edge: 'right'
    });
    $('.slider').slider({
        interval: 99999
    });
    $('.modal').modal();
    $('.tabs').tabs();
    $('.card-image').mouseenter(function () {
        $(this).parent().parent().find('.list').slideUp(500);
        $(this).parent().parent().find('.hovered').fadeIn(500);
    });
    $('.products').mouseleave(function () {
        $(this).find('.list').slideDown(500);
        $(this).find('.hovered').fadeOut(300);
    }).mouseleave();
});

function filterCheck() {
    var cats = document.getElementsByName('category');
    if (document.getElementById("filter").checked) {
        for (var i = 0, len = cats.length; i < len; i++) {
            cats[i].disabled = false;
        }
    } else {
        for (var i = 0, len = cats.length; i < len; i++) {
            cats[i].disabled = true;
        }
    }
}

// function sortvalue() {
//     var sortval = document.getElementById("sorting").value;
//     createCookie("sortval", sortval, 10);
// }

// function createCookie(name, value, days) {
//     var expires;
//     if (days) { 
//         var date = new Date(); 
//         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
//         expires = "; expires=" + date.toGMTString(); 
//     } 
//     else { 
//         expires = ""; 
//     } 
//     document.cookie = escape(name) + "=" +  
//         escape(value) + expires + "; path=/"; 
// }

