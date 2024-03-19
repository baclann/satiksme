

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/requests.css">
    <link rel="icon" href="img/LOGO.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Rēzeknes Satiksme</title>
</head>
<body>






       <!--NAVIGATION-->
<div class="navigation" id="navbar">
        <ul class="menu">
 
                <a class = "add_ats" href="main.php">Galvenā</a>
                <a class = "add_rem" href="requests.php">Jaunumi</a>


                <a class = "add_ats" href="#">Maršruti</a>
                <a  href="main.php#pak">Pakalpojumi</a>
                <a  href="#">Rakstīt sūdzību</a>
                <a  href="#">Par mums</a>
                <a href="admin_panel_ad_request.php" style="color: #FF204E; font-weight: bold;">Admin Panel</a>
          </ul> 
       </div>

       <script>
        // Получаем элемент навигационной панели
        const navigation = document.getElementById('navbar');

        // Обработчик события скролла
        window.addEventListener('scroll', function() {
            // Если вертикальная прокрутка больше 100px, добавляем класс "scrolled", иначе удаляем
            if (window.scrollY > 100) {
                navigation.classList.add('scrolled');
            } else {
                navigation.classList.remove('scrolled');
            }
        });
    </script>


        <div class="wrapper">

            <div class="req_block">
                <div class="title_block">
                        <h1>SŪDZĪBAS <br> PIEVIENOŠANA</h1>
                        <p>Lūdzu aizpildiet formu zemāk.</p>

                        <div class="req_form_block">

        <form method="post" action="php/compl_add.php">

        <div class="name_box">
            <label for="name">Jūsu vārds</label>
            <input class="name_style" type="text" id="name" name="name">
        </div>

        <div class="phone_box">
            <label for="phone">Jūsu telefona numurs</label>
            <input class="phone_style" type="text" id="phone" name="phone">
        </div>

        <div class="complaints_box">
            <label for="type">Iemesls</label>
            <select class="variables" id="type" name="type">
                <option selected>Nav izvelēts..</option>
                <option value="Personāla darbs">Personāla darbs</option>
                <option value="Autobusa ierašanās laiks">Autobusa ierašanās laiks</option>
                <option value="Autobusa iekšējais stāvoklis">Autobusa iekšējais stāvoklis</option>
                <option value="Pieturas stāvolis">Pieturas stāvolis</option>
                <option value="Mājaslapas darbība">Mājaslapas darbība</option>
            </select>
        </div>
        <div class="date_box">
           
        </div>
        <div class="description">
            <label for="descr">Situācijas apraksts</label>
            <textarea name = "description" class="descr_style" id="description" maxlength="300" oninput="updateCharacterCount()" style = "padding:10px;"></textarea>
        </div>
                <div class="foot_block">
                    <p>Pievienot failu:</p><br>
                <input class = 'file_add' type="file" name="file" id="file">
                <button class = "send" type = "submit">Sūtīt</button>

           
    </form>


            </div>
                    </div>
                </div>

                <div class="mainimg">
    <img class = "vector1" src="img/main_img.png" alt="Ooops....">
        </div>
            </div>

        </div>


</body>
<footer>
<div class="wrapper"> 
    <div class="contact_block">
            <div class="footer_title">
                <h3>Kontaktinformācija</h3>
            </div>
            <div class="footer_cntnt">
            <p>+37128303542</p> <br>
                    <p>uznemums@gmail.com</p> <br>
                    <p>Atbrīvošanas aleja 81, RĒZEKNE</p>
            </div>
    </div>
    <div class="social_media_block">
            <div class="footer_title">
            <h3>Seko mums</h3>
            </div>
            <div class="footer_cntnt">
                <a href="#"> <img src="img/footer_Facebook.png" alt="Oooops...."></a>

                </div>
    </div>
</div>
    </footer>
</html>