<?php
    require 'utils_db/db_conn.php';
    require 'utils_db/login_db.php';
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
        <h2>Login To-Do List</h2> 
    </div>
        <div align="center" class="main-section">
            <br /><br /><br />
            <form method= "POST" action="">
                <input type="email" name="emailconnect" placeholder="Email" />
                <input type="password" name="passconnect" placeholder="Password" />
                <input type="submit" name="formconnect" values="Login" />
            </form>
            <br /><br />
            <div class="styledef">
            <?php
                if (isset($erreur)) {
                    echo $erreur;
                }
            ?>
            </div>
            <a href="create_account.php">Sign in</a>
        </div>
    </body>
</html>