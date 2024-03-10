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