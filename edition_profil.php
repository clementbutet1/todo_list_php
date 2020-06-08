<?php
    require 'utils_db/db_conn.php';
    require 'utils_db/edition_profil_db.php';
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
        <div align="center">
        <h2>Edit my profile</h2> 
        </div>
    </div>
        <div align="center" class="main-section">
        <form method= "POST" action="">
                <table>
                    <tr>
                        <td align="right">
                            <label>Nickname:   </label>
                        </td>
                        <td>    
                            <input type="text" name="newnickname" placeholder="New Nickname" values="<?php echo $user['nickname']; ?>" />
                        </td>
                    </tr>
                    <tr></tr><tr></tr><tr></tr>
                    <tr>
                        <td align="right">
                            <label>Email:   </label>
                        </td>
                        <td>    
                            <input type="email" name="newemail" placeholder="New Email" values="<?php echo $user['email']; ?>"/>
                        </td>
                    </tr>
                    <tr></tr><tr></tr><tr></tr>
                        <td align="right">
                            <label>Password:   </label>
                        </td>
                        <td>    
                            <input type="password" name="newpass" placeholder="New Password" />
                        </td>
                    </tr>
                    <tr></tr><tr></tr><tr></tr>
                    <tr>
                        <td align="right">
                        <label>Confirm your Password:   </label>
                        </td>
                        <td>    
                        <input type="password" name="newpass2" placeholder="Confirm your new Password" />
                        </td>
                    </tr>
                    <tr></tr><tr></tr><tr></tr>
                    <tr>
                        <td></td>
                        <td align="center">
                            <br />
                            <input type="submit" placeholder="Update my profile" values="Update my profile"/>
                        </td>
                    </tr>
                </table>
                <div class="styledef">
                <?php if (isset($msg)) { echo $msg; } ?>
                </div>
        </div>
    </body>
</html>