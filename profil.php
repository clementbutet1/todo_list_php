<?php
    require 'utils_db/db_conn.php';
    require 'utils_db/profil_db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="heading">
        <h2>Profil de <?php echo $userinfo['nickname']; ?></h2> 
    </div>
        <div align="center" class="main-section">
            <br /><br /><br />
            Nickname = <?php echo $userinfo['nickname']; ?>
            <br /><br />
            Email = <?php echo $userinfo['email']; ?>
            <br /><br />
            <?php
                if (isset($_SESSION['id_usr']) AND $userinfo['id_usr'] == $_SESSION['id_usr']) {
                ?>
                <a href="edition_profil.php">Edit my profile</a>
                <br /><br />
                <br /><br />
                <a href="todo/todo.php">Go to my to-do list </a>
                <br /><br />
                <br /><br />
                <a href="logout.php">Sign out </a>
                <?php
                }
                ?>
        </div>
    </body>
</html>