

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



        <div class="title_block">
            <div class="routes_action_block">
                <div class="routes_search">

            <select name="" id="fill_select" onchange="fill()">
                <option value=""></option>
                <option value="1">1 Nakts maršuts</option>
                <option value="4">4 Blaumaņa iela - F.Kempa iela - Vipinga</option>
                <option value="4A">4A Blaumaņa iela - NOOK - F.Kempa iela - Vipinga</option>
                <option value="5">5 Vipinga - Rēzekne 1 - Atpūta</option>
                <option value="6">6 Blaumaņa iela - Slimnīca - Vipinga</option>
            </select>
            <script>
    function fill() {
        var fillSelect = document.getElementById("fill_select");
        var selectedValue = fillSelect.value;
        var selectOption = document.getElementById("selectOption");
        var selectOption2 = document.getElementById("selectOption2"); // Добавили ссылку на второй select

        // Clear existing options
        selectOption.innerHTML = '';
        selectOption2.innerHTML = ''; // Очищаем второй select

        // Make AJAX request to fetch data from server
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/fetch_data.php?bus_nums=" + selectedValue, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);

                // Populate both selectOption and selectOption2 with fetched data
                data.forEach(function (item) {
                    var option1 = document.createElement("option");
                    option1.text = item.route;
                    selectOption.add(option1);

                    var option2 = document.createElement("option");
                    option2.text = item.route;
                    selectOption2.add(option2);
                });
            }
        };

        xhr.send();
    }
</script>

            <select id="selectOption" onchange="sendData()">
              <option value=""></option>

               <!-- Добавьте другие опции по мере необходимости -->
             </select>



            <select id="selectOption2" onchange="sendData()">
              <option value= ""></option>

               <!-- Добавьте другие опции по мере необходимости -->
             </select>


        </div>


            </div>
            <div id = "result2" class="routes_block">


     </div>

  


     <script>
      
    function sendData() {
        var selectedOption =  document.getElementById("selectOption").value;
        var selectedOption2 = document.getElementById("selectOption2").value;

        // Проверка на пустоту обоих селектов
        if (selectedOption !== "" && selectedOption2  !=="" ) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("result2").innerHTML = xhr.responseText;
                }
            };


            xhr.open("GET", "php/load_data2.php?option=" + parseInt(selectedOption) + "&option2=" + parseInt(selectedOption2), true);
            xhr.send();
        } else {
            // Если хотя бы один из селектов пуст, выполните нужные действия
            console.log("Выберите опции для обоих селектов");
        }
    }
</script>
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
                <a href="#"> <img src="img/footer_TikTOk.png" alt="Oooops...."></a>
                <a href="#"> <img src="img/footer_WhatsApp.png" alt="Oooops...."></a>
                </div>
    </div>

    </footer>
</html>