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