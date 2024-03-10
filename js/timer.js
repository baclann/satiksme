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