$(document).ready(function() {

    $.ajax({
      type: "GET",
      url: "php/users_load.php",
      dataType: "html",
      beforeSend: function() {
        // Добавьте код для отображения индикатора загрузки
        $(".table_block").html('<p>Loading.......</p>');
      },
      success: function(response) {
        $(".table_block").html(response);
      },
      complete: function() {
        // Добавьте код для скрытия индикатора загрузки после завершения запроса
        // Например, $(".user_list_block p").remove();
      }
    });
  
  });
  