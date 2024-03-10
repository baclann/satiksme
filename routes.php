

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/routes.css">
    <link rel="icon" href="img/LOGO.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/timer.js"> </script>
    <script src="js/select_fill.js"></script>
 
    <script src="js/clear_options_in_Select.js"></script>
    <script src="js/routes_loader.js"></script>
     <script src="js/routes_search_by_selects.js"></script>
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
                <a  href="complaints.php">Rakstīt sūdzību</a>
                <a  href="#">Par mums</a>
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
     <!--NAVIGATION-->


        <div class="title_block">
            <div class="routes_action_block">

                 <div class="clock" id="clock"></div>

                      <div class="routes_search">

                        <select class="route_chose" id="fill_select" onchange="fill()" placeholder="ds">
                        <option value="" disabled selected>Izvēlaties maršrutu</option>
                            <option value="bus_1">1 Nakts maršuts</option>
                            <option value="4">4 Blaumaņa iela - F.Kempa iela - Vipinga</option>
                            <option value="bus_4a">4A Blaumaņa iela - NOOK - F.Kempa iela - Vipinga</option>
                            <option value="bus_5">5 Vipinga - Rēzekne 1 - Atpūta</option>
                            <option value="bus_6">6 Blaumaņa iela - Slimnīca - Vipinga</option>
                            <option value="bus_7">7 Blaumaņa iela - Jupatovkas iela</option>
                            <option value="bus_8">8 Blaumaņa iela - Lauku iela</option>
                            <option value="bus_9">9 Blaumaņa iela - Makarovka - Vipinga</option>
                            <option value="bus_10">10 Blaumaņa iela - Kaunatas iela</option>
                            <option value="bus_11">11 Blaumaņa iela - Ļermontova iela</option>
                            <option value="bus_12">12 Blaumaņa iela - Gaišais ceļš</option>
                            <option value="bus_13">13 Vipinga - Tūmuži</option>
                            <option value="bus_14">14 Vipinga - Latvijas Finieris</option>
                            <option value="bus_15">15 Blaumaņa iela - Rītausma</option>
                            <option value="bus_16">16 Blaumaņa iela - Bekši</option>
                            <option value="bus_17">17 Blaumaņa iela - F.Kempa iela - Zarečnaja</option>
                            <option value="bus_18">18 Blaumaņa iela - Janopole</option>
                            <option value="bus_19">19 Blaumaņa iela - Dzirkstele</option>
                            <option value="bus_21">21 Blaumaņa iela - Vipinga</option>
                            <option value="bus_21a">21A Centrs - Blaumaņa iela</option>
                            <option value="bus_21b">21B Centrs - Vipinga</option>
                            <option value="bus_71">71 Blaumaņa iela - Stolbovka</option>
                        </select>

            <!-- Selekti -->
            <select class="route_chose" id="selectOption" onchange="sendData(); updateOptions()">
            <option value="" disabled selected>Maršruts nav izvēlēts</option>
             </select>

            <select class="route_chose" id="selectOption2" onchange="sendData()">
            <option value="" disabled selected>Maršruts nav izvēlēts</option>
             </select>
   <!-- Selekti -->

             <div class="wrapper_select">
                <div class="select-btn">
                <span class="input_txt">Izvelaties pieturu (no)</span>
                <i class="uil uil-angle-down" style="color: white;"></i>
              </div>
                <div class="content">
                    <div class="search">
                    <i class="uil uil-search"></i>
                    <input spellcheck="false" type="text" placeholder="Meklēt" class="select_input">
                    </div>
                    <ul class="options"></ul>
                </div>
                </div>
                <script src="js/custom_Select.js"></script>
            </div>

                  <div class="card" id = "result2"> 
                  <h1>Reāllaika Maršruti</h1>
                    <p>Klikškiniet pa nepieciešamo maršrutu lai uzzinātu vairāk</p>
                  </div>
                  
  
            </div>
        </div>
       

 </body>
<!--<footer>
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
                <a href="#"> <img src="img/footer_TikTOk.png" alt="Oooops...."></a>
                <a href="#"> <img src="img/footer_WhatsApp.png" alt="Oooops...."></a>
                </div>
    </div>

    </footer> -->

</html>