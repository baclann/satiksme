function turnover(bool, elemid) {
    let curTime = document.getElementById('hidden_time').value;
    $.ajax({
        type: "post",
        url: "php/test_routes_loader.php",
        data: 
        {
            bool: bool.value,
            cur_time: curTime
        },
        dataType: "text",
        success: function (response) {
            let elements = document.querySelectorAll('.info');

            // Loop through the selected elements and remove them
            elements.forEach(element => {
                element.remove();
            });

            let elements2 = document.querySelectorAll('.pudzena');

            // Loop through the selected elements and remove them
            elements2.forEach(element2 => {
                element2.remove();
            });

            // Update button value based on bool
            bool.value = bool.value === 'true' ? 'false' : 'true';

            // Construct the button ID using elemid
            let buttonId = 'btn' + elemid;

            // Update button value attribute
            let buttonElement = document.getElementById(buttonId);
            if (buttonElement) {
                buttonElement.value = bool.value;
            } else {
                console.error("Button with ID '" + buttonId + "' not found.");
            }

            loader();
        },
        error: function(xhr) {
            console.error(xhr);
        }
    });
}


function loader() {
    let curTime = document.getElementById('hidden_time').value;
    $.ajax({
        type: "post",
        url: "php/test_routes_loader.php",
        data:
        {
            cur_time: curTime
        },
        dataType: "text",
        success: function(response) {
            $('.card').append(response);

            // Get all details elements inside div with class "card"
            const $detailsElements = $('.card details');

            // // Hide all details elements
            $detailsElements.removeAttr('open');

            // Add click event handler for summary elements
            $detailsElements.find('.first').click(function() {
                // Close all other details elements except the one clicked
                
                $detailsElements.not($('this').parent()).removeAttr('open');

                // Toggle opening/closing of the parent details element
                $(this).parent().attr('open', function(_, value) {
            //         return value === null ? 'open' : null;
                });
            });
            $detailsElements.find('.second').click(function() {
                // Close all other details elements except the one clicked

                //$detailsElements.not($('this').parent()).removeAttr('open');

                // Toggle opening/closing of the parent details element
                $(this).parent().attr('open', function(_, value) {
            //         return value === null ? 'open' : null;
                });
            });
        }
    });
}

$(document).ready(function() {
    setTimeout(() => {
        let curTime = document.getElementById('hidden_time').value;
        loader();
        console.log(curTime);
    }, 1000);
});
