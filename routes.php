

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

            <div class="clock" id="clock"></div>
            <!-- <script>
function updateTime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();

    // Adding leading zero if the number is less than 10
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;

    var timeString = hours + "<span id='blink'>:</span>" + minutes;
    
    document.getElementById('clock').innerHTML = timeString;
}

// Update time every second
setInterval(updateTime, 1000);

// Function to toggle blinking
function toggleBlink() {
    var blink = document.getElementById('blink');
    if (blink.style.visibility === 'visible') {
        blink.style.visibility = 'hidden';
    } else {
        blink.style.visibility = 'visible';
    }
}

// Initial call to display time
updateTime();

// Call the function to toggle blinking every half second
setInterval(toggleBlink, 500);
</script> -->
<script> 
 var currTime;
$(document).ready(function() {
    function updateTime() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        // Adding leading zero if the number is less than 10
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;

        currTime = hours + ":" + minutes;
        var timeString = hours + "<span id='blink'>:</span>" + minutes;

        $('#clock').html(timeString);
    }

    function toggleBlink() {
        $('#blink').toggle();
    }

    

    updateTime();
    setInterval(updateTime, 1000);
    setInterval(toggleBlink, 500);
    setInterval(checkDatabase, 1000); // Проверка базы данных каждую минуту
});
</script>
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

                <script>
                function fill() {
                    var fillSelect = document.getElementById("fill_select");
                    var selectedValue = fillSelect.value;
                    var selectOption = document.getElementById("selectOption");
                    var selectOption2 = document.getElementById("selectOption2"); // Добавили ссылку на второй select
                    console.log(selectedValue);
                    
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
                                option1.value = item.id; // Установка значения value равным id
                                selectOption.add(option1);

                                var option2 = document.createElement("option");
                                option2.text = item.route;
                                option2.value = item.id; // Установка значения value равным id
                                selectOption2.add(option2);
                            });
                        }
                    };

                    xhr.send();
                }
                </script>


            <select class="route_chose" id="selectOption" onchange="sendData(); updateOptions()">
            <option value="" disabled selected>Maršruts nav izvēlēts</option>

           
             </select>



            <select class="route_chose" id="selectOption2" onchange="sendData()">
            <option value="" disabled selected>Maršruts nav izvēlēts</option>

               <!-- Добавьте другие опции по мере необходимости -->
             </select>
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
                <!-- <button><i class="fa-solid fa-magnifying-glass"></i></button> -->



                <script>
    const wrapper = document.querySelector(".wrapper_select"),
        selectBtn = wrapper.querySelector(".select-btn"),
        searchInp = wrapper.querySelector("input"),
        options = wrapper.querySelector(".options");
    var countries;

    window.onload = function(e) {
        $.ajax({
            type: "GET",
            url: "php/load_select_routes.php",
            dataType: "json",
            success: function(response) {
                countries = response;
                console.log(countries);
                addCountry(); 
            }
        });
    }

    function addCountry(selectedCountry) {
        options.innerHTML = "";
        countries.forEach(country => {
            let isSelected = country == selectedCountry ? "selected" : "";
            let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
            options.insertAdjacentHTML("beforeend", li);
        });
    }

    function updateName(selectedLi) {
        searchInp.value = "";
        addCountry(selectedLi.innerText);
        wrapper.classList.remove("active");
        selectBtn.firstElementChild.innerText = selectedLi.innerText;
    }

    searchInp.addEventListener("keyup", () => {
        let arr = [];
        let searchWord = searchInp.value.toLowerCase();
        arr = countries.filter(data => {
            return data.toLowerCase().startsWith(searchWord);
        }).map(data => {
            let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
            return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
        }).join("");
        options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Noradīta pietura netika atrasta</p>`;
    });

    selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
</script>




                <script>
                    function updateOptions() {
                    var select1 = document.getElementById("selectOption");
                    var select2 = document.getElementById("selectOption2");
                    
                    var selectedValue = parseInt(select1.value);
                    
                    for (var i = 0; i < select2.options.length; i++) {
                        var optionValue = parseInt(select2.options[i].value);
                        if (optionValue < selectedValue || optionValue === selectedValue) {
                        select2.options[i].hidden = true;
                        } else {
                        select2.options[i].hidden = false;
                        }
                    }
                    }
        </script>


            </div>
                  <!-- <div id = "result2" class="routes_block"> -->
                  <div class="card" id = "result2"> 
                  <h1>Reāllaika Maršruti</h1>
                    <p>Klikškiniet pa nepieciešamo maršrutu lai uzzinātu vairāk</p>


                  </div>
             <script>
    document.addEventListener('DOMContentLoaded', function() {
        window.onload = function(e){
            $.ajax({
                type: "GET",
                url: "test_routes_loader.php",
                dataType: "text",
                success: function (response) {
                    $('.card').append(response);

                    // Получаем все элементы details внутри div с классом "card"
                    const detailsElements = document.querySelectorAll('.card details');

                    // Проходимся по каждому элементу details
                    detailsElements.forEach(detailsElement => {
                        // Скрываем все блоки
                        detailsElement.removeAttribute('open');

                        // Добавляем обработчик события при клике на summary
                        detailsElement.querySelector('summary').addEventListener('click', () => {
                            // Закрываем все открытые блоки, кроме текущего
                            detailsElements.forEach(otherDetailsElement => {
                                if (otherDetailsElement !== detailsElement) {
                                    otherDetailsElement.removeAttribute('open');
                                }
                            });
                        });
                    });
                }
            });
        }
    });
</script>
     <script>
            function sendData() {
                var fill_select = document.getElementById("fill_select").value;
                var selectedOption =  document.getElementById("selectOption").value;
                var selectedOption2 = document.getElementById("selectOption2").value;
                console.log('SDSD: ' +fill_select );
                // Проверка на пустоту обоих селектов
                if (selectedOption !== "" && selectedOption2  !=="" ) {
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            document.getElementById("result2").innerHTML = xhr.responseText;
                        }
                    };


                    xhr.open("GET", "php/load_data2.php?option=" + parseInt(selectedOption) + "&option2=" + parseInt(selectedOption2) + "&fillselect=" + fill_select , true);
                    xhr.send();
                } else {
                    // Если хотя бы один из селектов пуст, выполните нужные действия
                    console.log("Выберите опции для обоих селектов");
                }
            }
</script>
  
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