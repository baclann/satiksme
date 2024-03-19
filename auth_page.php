<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/auth.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <title>Autorizācija</title>
</head>
<body>
<!--------------------------------------NOTIFICATIONS-->
<div class="toast">
        <div class="toast-content">
            <i class="fas fa-solid fa-check check"></i>
            <div class="message">
   
                <span class="text text-2">Jūs veiksmīgi autorizējaties <br> Lūdzu uzgaidiet</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress"></div>
    </div>
    
     

    <div class="toast2">
        <div class="toast-content2">
        <i class="fas fa-solid fa-xmark check"></i>
            <div class="message">
                <span class="text text-">Neveiksmīga autorizācija. <br> Mēģiniet vēlreiz</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress2"></div>
    </div>
    


<!--------------------------------------NOTIFICATIONS-->
    <div class="auth_block">
        <div class="auth_title_block">
            <h3>Autorizācija</h3>
            
        </div>


        <form>
        <div class="auth_ctnt">
            <input type="text" name="login" id="username" placeholder="Lietotājvārds" value="admin" ><br>
            <input type="password" name="password" id="password" placeholder = "Parole" value="admin" ><br>
            <button id = "btn" >Autorizēties</button>
            
        </div>
        </form>



    </div>
    <script>
         $('#btn').click(function(e){
            e.preventDefault();
            
            let login = $('input[name = "login"]').val(),
            password = $('input[name = "password"]').val();
           
           $.ajax ({
            url: 'php/auth.php',
            type: 'POST',
            dataType: 'text',
            data: {
                login: login,
                password: password,
            },
            success: function(data) {

                if (data == "Success") {
                    var script = document.createElement('script');
                    script.src = 'js/notify.js';  
                    document.head.appendChild(script);

                    setTimeout(function() {
                    window.location.href = 'admin_panel.php';
                }, 5000);
                }
                else {
                    var script = document.createElement('script');
                    script.src = 'js/err_notify.js';  
                    document.head.appendChild(script)

                    setTimeout(function() {
                    window.location.href = 'auth_page.php';
                }, 2000);
                }}
                
          
           });
        });
    </script>
</body>
<footer> &copy;2024 Zunda Dev</footer>
</html>