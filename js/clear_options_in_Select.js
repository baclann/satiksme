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