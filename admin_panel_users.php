<?php

if (empty($_COOKIE['auth'])) {
   
    header("location:http://satiksme.webexteam.eu/auth_page.php"); 
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Administrēšanas vietne</title>
</head>
<body>

<div class="toast">
        <div class="toast-content">
            <i class="fas fa-solid fa-check check"></i>
            <div class="message">
   
                <span class="text text-2">Lietotājs <span id = "user_show"></span><br> Veiksmīgi pievienots</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress"></div>
    </div>



    <div class="nav_block">
        <div class="items">

            <ul class = "menu">
            <a  href="#">Jaunumi</a>
            <a  href="admin_panel_ad_request.php">Reklāmas pieteikumi</a>
            <a  href="admin_panel_rents.php">Nomas pieteikumi</a>
            <a  href="admin_panel_complaints.php">Sūdzības</a>
            <a  href="admin_panel_rev.php">Atsauksmes</a>
            <a  href="admin_panel_users.php">Konti</a>
            </ul>

        </div>
        <div class="items">
        <ul class = "menu">
        <a class = "nav_actions" href="php/logout.php">Iziet</a>
        <a class="nav_actions" href="#"><img src="img/user.png" alt=""></a>
        <a class="nav_actions" href="main.php"><img src="img/home.png" alt=""></a>
        </ul>
            </div>
    </div>

    <div class="wrapper">
        <div class="req_table_block">
            <div class="action_bar">

            <div class="actions">
                <h2>Lietotāju saraksts</h2>
            </div>

        </div>

        <div class="table_titles_block">

        
                
            </div>
        <div class="user_add_block">

        <input type="text" name="username" id="" placeholder="Lietotājvārds">
        <input type="text" name="password" id="" placeholder="Parole">
        <button class="user_add_btn"><i class="fas fa-solid fa-plus"></i></button>
        <input  type="text" name ="search" placeholder="Meklēt...">
        <button class="search_btn"><i class="fas fa-solid fa-search"></i></button>

        <div class="select-menu">
        <div class="select-btn">
            <span id = "mySpan" class="sBtn-text">Kārtot pēc</span>

 <script>
  var mySpan = document.getElementById('mySpan');
  mySpan.addEventListener('DOMSubtreeModified', function() {

    var newContent = mySpan.innerHTML;
    console.log(newContent);
    if (newContent == "ID down") {
        $.ajax({
      type: "GET",
      url: "php/sort_by_id.php",
      dataType: "html",
      beforeSend: function() {

        $(".table_block").html('<p>Loading.......</p>');
      },
      success: function(response) {
        $(".table_block").html(response);
      },
      complete: function() {

        //  $(".user_list_block p").remove();
      }
      
    });
    
    }
    else if (newContent == "ID up") {
        $.ajax({
      type: "GET",
      url: "php/sort_by_id_up.php",
      dataType: "html",
      beforeSend: function() {
        
        $(".table_block").html('<p>Loading.......</p>');
      },
      success: function(response) {
        $(".table_block").html(response);
      },
      complete: function() {

        // $(".user_list_block p").remove();
      }
      
    });
    
    }
    else if (newContent == "Liet.v down") {
        
        $.ajax({
      type: "GET",
      url: "php/sort_by_liet_down.php",
      dataType: "html",
      beforeSend: function() {
        
        $(".table_block").html('<p>Loading.......</p>');
      },
      success: function(response) {
        $(".table_block").html(response);
      },
      complete: function() {
 
        //  $(".user_list_block p").remove();
      }
      
    });
    
    }
    else if (newContent == "Liet.v up") {
        
        $.ajax({
      type: "GET",
      url: "php/sort_by_liet_up.php",
      dataType: "html",
      beforeSend: function() {
   
        $(".table_block").html('<p>Loading.......</p>');
      },
      success: function(response) {
        $(".table_block").html(response);
      },
      complete: function() {
       
        // $(".user_list_block p").remove();
      }
      
    });
    
    }
  });
</script>
            <i class="bx bx-chevron-down"></i>
        </div>
        <ul class="options">
            <li class="option">
                
                <span class="option-text"><i class="fa-solid fa-arrow-down"></i>ID down</span>
            </li>
            <li class="option">
                
                <span class="option-text"><i class="fa-solid fa-arrow-up"></i>ID up</span>
            </li>
            <li class="option">
                
                <span class="option-text"><i class="fa-solid fa-arrow-down"></i>Liet.v down</span>
            </li>
            <li class="option">
                
                <span class="option-text"><i class="fa-solid fa-arrow-up"></i>Liet.v up</span>
            </li>
            <li class="option">
                
                <span class="option-text"><i class="fa-solid fa-arrow-down"></i>Reg. dat. down</span>
            </li>
            <li class="option">
                
                <span class="option-text"><i class="fa-solid fa-arrow-up"></i>Reg. dat. up</span>
            </li>
        </ul>
    </div>

      </div>


        <div class="table_block">
     


            
        </div>

        </div>
    </div>
    <script src="js/user_add.js"></script>
    <script src="js/user_load.js"></script>
    <script src="js/user_search.js"></script>
    <script src="js/select.js"></script>

</body>
<footer> &copy;2024 Zunda Dev</footer>
</html>