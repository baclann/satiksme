$('.user_add_btn').click(function (e) {
    e.preventDefault();
    let login = $('input[name = "username"]').val(),
        pass = $('input[name = "password"]').val(); 

    $.ajax({
        type: "post",
        url: "php/user_add.php",
        data: {
            username: login,
            password: pass,
        },
        dataType: "text",
        success: function (data) {

            if (data == "Success") {
        var script = document.createElement('script');
        script.src = 'js/notify.js';  
        document.head.appendChild(script);
        $('#user_show').text(login);
        
    }
    else {
        var script = document.createElement('script');
        script.src = 'js/err_notify.js';  
        document.head.appendChild(script)

        }}
    });
});