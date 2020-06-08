<?php
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $email2 = htmlspecialchars($_POST['email2']);
    $pass = sha1($_POST['pass']);
    $pass2 = sha1($_POST['pass2']);

    if (isset($_POST['form'])) {
        if (!empty($_POST['nickname']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['pass']) AND !empty($_POST['pass2'])) {
            $nicknamelen = strlen($nickname);
            if ($nicknamelen <= 255) {
                if ($email == $email2) {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = $conn->prepare("SELECT * FROM membres WHERE email = ?");
                        $reqmail->execute(array($email));
                        $mailexist = $reqmail->rowCount();
                        if ($mailexist == 0) {
                            if ($pass == $pass2) {
                                $insertmbr = $conn->prepare("INSERT INTO membres(nickname, email, pass) VALUES(?, ?, ?)");
                                $insertmbr->execute(array($nickname, $email, $pass));
                                $erreur = "Your account has been created <a href=\"login.php\"> Login </a>";
                            } else {
                                $erreur = "Your password doesn't match";
                            } 
                        } else {
                            $erreur = "Email address already used";
                        }
                    } else {
                        $erreur = "Your email address is not valid";
                    }
                } else {
                    $erreur = "Your email doesn't match";
                }
            
            } else {
                $erreur = "Your nickname must not exceed 255 characters";
            }
        } else {
            $erreur = "All fields must be completed ";
        }
    }
?>