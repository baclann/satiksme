
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rēzeknes Satiksme</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/LOGO.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



</head>
<body>
   
    <!--NAVIGATION-->
<div class="navigation" id="navbar">
        <ul class="menu">
                <a class = "add_rem" href="requests.php">Jaunumi</a>


                <a class = "add_ats" href="#">Maršruti</a>
                <a  href="#pak">Pakalpojumi</a>
                <a  href="complaints.php">Rakstīt sūdzību</a>
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
         <!--LEFT_CONTENT-->
        <div class="txt">
            <h1 class = "main_txt">MŪSU DARBS - JŪSU KOMFORTS</h1>
            <p class = "sub_main_txt">Sabiedriskais transports Rēzeknē.</p>
            <div class="rows"><img class = "row_img"src="img/row_img.png" alt="">
            <p class="row_txt">Strādājam kopš <b>2011</b> gada.</p>    
        </div>
            <div class="rows"><img class = "row_img"src="img/row_img.png" alt="">
            <p class="row_txt">Kaut kāds teksts</div>
            <div class="rows"><img class = "row_img"src="img/row_img.png" alt="">
            <p class="row_txt">Vēl kaut kāds teksts.</div>
        
        <div class="btns"><a class = "btn_url" href="routes.php"><button class= "add_rem_btn">Maršrutu pārskats</button></a> <button  class= "add_saz_btn">Jaunumi</button></div>
        </div>
        

            <!--RIGHT_CONTENT-->
        <div class="mainimg">
    <img class = "vector1" src="img/main_img.png" alt="Ooops....">
        </div>
    </div>
    <div class="wrapper">
        <div class="uzn_darb">
            <div class="virsr">
                <h1 class = "virsr_Style">UZŅĒMUMA DARBĪBA</h1>
            </div>
            <div class="darbiba_img">
                <img class = "darb_img_style" src="img/darbiba_img.png" alt="Ooops....">
            </div>

        </div>
    </div>
    <div class="wrapper">
        <div class="uzn_darb">
            <div class="virsr">
                <h1 id = "pak" class = "virsr_Style">MŪSU PAKALPOJUMI</h1>
            </div>

        <div class="add_rent_block">
            
                    <div class="add_block">
                    <div class="add_img">
                        <img src="img/add_img.png" alt="Ooops...">
                    </div>
                    <div class="add_title">
                        <h3>Reklāmas izvietošana</h3>
                    </div>
                    <div class="add_subtitle">
                        <p>Piedāvajam izvietot jūsu uzņēmuma reklāmu uz mūsu autobusiem. </p>
                    </div>
                    <div class="add_readmore">
                        <p>Lasīt vairāk... </p>
                    </div>
                    <div class="add_btn">
                       <a href="requests.php"><button>Pieteikt</button></a>
                    </div>
            </div>
            <div class="rent_block">
            <div class="add_img">
                        <img src="img/rent_img.png" alt="Ooops...">
                    </div>
                    <div class="add_title">
                        <h3>Autobusu noma</h3>
                    </div>
                    <div class="add_subtitle">
                        <p>Piedāvajam mūsu autobusu nomu, jūsu lieliskajiem ceļojimiem! </p>
                    </div>
                    <div class="add_readmore">
                        <p>Lasīt vairāk... </p>
                    </div>
                    <div class="add_btn">
                    <a href="rent.php"><button>Pieteikt</button></a>
                    </div>
            </div>
        </div>


        </div>
    </div>



<div class="rev_virsr">
    <h1>ATSAUKSMES</h1>
</div>
<div class="wrapper"> 
      
<div class="rev_block_main">



    <div class="rev_add_block">
                <div class="rev_add_title">
                    <p class = "rev_title">Pievienot atsauksmi</p>
                </div>
                <form method="post" action = "php/rev_add.php">

                <label for="name">Jūsu vārds</label><br>
                <input type="text" name="name" id="name"><br>
                <label for="descr">Jūsu atsauksme</label><br>
                <textarea class = "descr_style"name="comment" id="comment" cols="30" rows="10" ></textarea>
                <button class ="send" type="submit">Sūtīt</button><br><br>

                </form>
                <div class="rev_add_subtitle">
                   
                  
                </div>
</div>
            <div class="rew_block">
      
                 <?php
            // Connect to MySQL database
            include "conn.php";

            // Fetch data from the 'reviews' table
            $result = $connection->query("SELECT name, comment FROM reviews");

            // Output data
            while ($row = $result->fetch_assoc()) {
                ?>
            
                <div class="rew_block_items">
                <?php

                echo "<p> <b>" . $row['name'] . "</p></b>";
                echo "<p>" . $row['comment'] . "</p>";
       
                ?>
            
                </div> <!--rew_block_items---> 
    
                <?php
            }

            ?>
            <?php
            // Close the connection
            $connection->close();
            ?>
  
  </div>  <!--rew_block---> 

  </div> <!--rew_block_main---> 


  </div> <!--Wrapper-->



    <div class="wrapper">
  

            <!--RIGHT_CONTENT-->
        <div class="Location_time_block">
        <h3 class = "location_title">ATRAŠANĀS VIETA</h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1097.9868397457744!2d27.337810028647066!3d56.50656853508915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46c215f09cc4c7a3%3A0xe348e0e4ab3cdc!2sSIA%20%22R%C4%93zeknes%20satiksme%22!5e0!3m2!1sru!2slv!4v1705953930119!5m2!1sru!2slv" width="100%" height="334" style="border:0; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <p>+371 25697222</p> <br>
                    <p>rezeknessatiksme@rezekne.lv</p> <br>
                    <p>Raiņa iela 8, Rēzekne, LV-4601</p>
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