$(document).ready(function() {
    $('.header_burger').click(function(event) {
        $('.header_burger, .menu, .head_text, .head_text1, .head_text2, .logo_block').toggleClass('active');
    });
});


$(document).ready(function(){
    $("#form").submit(function() {
        var form_data = $(this).serialize(); 
        $.ajax({
            type: "POST",
            url: "telegram.php",
            data: form_data,
            success: swal({
                title: "Спасибо за заявку",
                icon: "success",
                timer: 2000
            })
        });
        $('#button').prop('disabled', true)
        event.preventDefault();
    });
});
