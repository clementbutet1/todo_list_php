<?php
    require 'utils_db/db_conn.php';
    require 'utils_db/create_account_db.php';
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
        <h2>Creating an account</h2> 
    </div>
        <div align="center" class="main-section">
            <br /><br /><br />
            <form method= "POST" action="">
                <table>
                    <tr>
                        <td align="right">
                            <label for="nickname"> Nickname :</label>
                        </td>
                        <td>    
                            <input type="text" placeholder="Your Nickname" id="nickname" name="nickname" values = "<?php if (isset($nickname)) { echo $nickname; }?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="email"> Email :</label>
                        </td>
                        <td>    
                            <input type="email" placeholder="Your Email" id="email" name="email" values = "<?php if (isset($email)) { echo $email; }?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="email2"> Confirm your Email:</label>
                        </td>
                        <td>    
                            <input type="email" placeholder="Confirm your Email" id=">email2" name="email2" values = "<?php if (isset($email2)) { echo $email2; }?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="pass"> Password :</label>
                        </td>
                        <td>    
                            <input type="password" placeholder="Password" id=">pass" name="pass"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="pass2"> Confirm your Password:</label>
                        </td>
                        <td>    
                            <input type="password" placeholder="Confirm your Password" id=">pass2" name="pass2"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center">
                            <br />
                            <input type="submit" name="form" values="submit" />
                        </td>
                    </tr>
                </table>
            </form>
            <div class="styledef">
            <?php
                if (isset($erreur)) {
                    echo $erreur;
                }
            ?>
            </div>
        </div>
    </body>
</html>