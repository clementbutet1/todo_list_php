<?php
session_start();
    if (isset($_POST['formconnect'])) {
        $emailconnect = htmlspecialchars($_POST['emailconnect']);
        $passconnect = sha1($_POST['passconnect']);
        if (!empty($emailconnect) AND !empty($passconnect)) {
            $requser = $conn->prepare("SELECT * FROM membres WHERE email = ? AND pass = ?");
            $requser->execute(array($emailconnect, $passconnect));
            $userexist = $requser->rowCount();
            if ($userexist == 1) {
                $userinfo = $requser->fetch();
                $_SESSION['id_usr'] = $userinfo['id_usr'];
                $_SESSION['nickname'] = $userinfo['nickname'];
                $_SESSION['email'] = $userinfo['email'];
                header("Location: profil.php?id_usr=".$_SESSION['id_usr']);
            } else {
                $erreur = "Wrong mail or password";
            }
        } else {
            $erreur = "All fields must be completed";
        }
    }
?>