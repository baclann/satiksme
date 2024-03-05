<?php
$alert = '';
if (empty($_COOKIE['auth'])) {
   
    header("location:http://localhost/satiksme_new/auth_page.php"); 
    $alert = 'Autorizācijas laiks beidzies.. Lūdzu autorizējaties atkārtoti.';
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Administrēšanas vietne</title>
</head>
<body>

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
        <a class="nav_actions" href="main.php"><img src="img/settings.png" alt=""></a>
        <a class="nav_actions" href="main.php"><img src="img/home.png" alt=""></a>
      
        </ul>
            </div>
    </div>

    <div class="wrapper">
      <div class="choose_block">
        <div class="action_block">
        <div class="action_img">
        <img src="img/news.png" alt="Ooooops...">
    </div>

<div class="action_title">
<p>Mājas lapas satura rediģēšana</p>
</div>

        </div>

        <div class="action_block">
                <div class="action_img">
                    <img src="img/Database.png" alt="Ooooops...">
                </div>
                <div class="action_title">
                <p>Datu rediģēšana</p>
                </div>

            </div>
            <div class="action_block">
            <div class="action_img">
            <img src="img/user_action.png" alt="Ooooops...">
</div>
<div class="action_title">
<p>Darbības ar lietotājiem</p>
</div>
            </div>
      </div>
        </div>
    </div>

</body>
<footer> &copy;2024 Zunda Dev</footer>
</html>