    function turnover(bool, elemid) {


        console.log(bool, ' .!. ',elemid)
        
            $.ajax({
                type: "POST",
                url: "php/test_routes_loader.php",
                data: {bool: bool.value},
                dataType: "TEXT",
                success: function (response) {
                    $('.card').append(response);
                    console.log(response);
                },error: function(xhr){
                    console.error(xhr);
                }
            });









}