$('.search_btn').click(function(e) {
    e.preventDefault();

    let search = $('input[name = "search"]').val();

    $.ajax({
      type: "post",
      url: "php/users_search.php",
      dataType: "text",
      data: {
        user_to_search: search,
      },
      
      beforeSend: function() {
        
        // Добавьте код для отображения индикатора загрузки
        $(".table_block").html("<p>Loading...</p>");
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
  