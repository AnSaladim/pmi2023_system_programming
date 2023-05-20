$(document).ready(function() {
    $('.header_burger').click(function(event) {
        $('.header_burger, .menu').toggleClass('active');
    });
});

var boss = document.getElementById("boss")




// document.addEventListener('submit', function () {
//     $('#button').toggleClass("is_active");
//     $('#button').prop('disabled', true);
//   })



// $('.topnav a').on('click', function() {

//     let href = $(this).attr('href');

//     $('html, body').animate({
//         scrollTop: $(href).offset().top
//     }, {
//         duration: 550,   
//         easing: "linear" 
//     });

//     return false;
// });