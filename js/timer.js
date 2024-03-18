var currTime;
let my_num = 0;
var blinkSpan;
$(document).ready(function() {
    function updateTime() {
        // Запрос к API для получения текущего времени
        $.ajax({
            url: 'http://worldtimeapi.org/api/ip',
            method: 'GET',
            success: function(response) {
                // Парсим ответ и получаем текущее время
                var currentTime = new Date(response.utc_datetime);
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                
                // Добавление ведущего нуля, если число меньше 10
                hours = hours < 10 ? '0' + hours : hours;
                minutes = minutes < 10 ? '0' + minutes : minutes;

                currTime = hours + ":" + minutes;

                // Если #blink еще не был найден, найдем его и сохраним ссылку
                if (!blinkSpan) {
                    blinkSpan = $('#blink');
                }

                // Визуальное представление времени с мигающим разделителем
                var timeString = hours + "<span id='blink'>:</span>" + minutes;

                // Переключение между пустым пространством и разделителем при мигании
                // if (my_num == 0) {
                //     document.getElementById('blink').style.opacity = 0;
                //     my_num++;
                // } else {
                //     document.getElementById('blink').style.opacity = 1;
                //     my_num--;
                // }
                document.getElementById('hidden_time').value = currTime;

                $('#clock').html(timeString);
            }
        });
    }

    function toggleBlink() {
        if (blinkSpan) {
            blinkSpan.toggle();
        }
    }

    updateTime();
    setInterval(updateTime, 1000);
    setInterval(toggleBlink, 500);
//    setInterval(checkDatabase, 1000); // Проверка базы данных каждую минуту
});
