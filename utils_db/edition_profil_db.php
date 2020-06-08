<?php
session_start();
    if (isset($_SESSION['id_usr'])) {
        if (!empty($_POST['newnickname']) OR !empty($_POST['newemail']) OR !empty($_POST['newpass']) AND !empty($_POST['newpass2'])) {
            $requser = $conn->prepare("SELECT * FROM membres WHERE id_usr = ?");
            $requser->execute(array($_SESSION['id_usr']));
            $user = $requser->fetch();

            if (isset($_POST['newnickname']) AND !empty($_POST['newnickname']) AND $_POST['newnickname'] != $user['nickname']) {
                $newnickname = htmlspecialchars($_POST['newnickname']);
                $insertnickname = $conn->prepare("UPDATE membres SET nickname = ? WHERE id_usr = ?");
                $insertnickname->execute(array($newnickname, $_SESSION['id_usr']));
                header('Location: profil.php?id_usr='.$_SESSION['id_usr']);
            }
            if (isset($_POST['newemail']) AND !empty($_POST['newemail']) AND $_POST['newemail'] != $user['email']) {
                $newemail = htmlspecialchars($_POST['newemail']);
                $insertemail = $conn->prepare("UPDATE membres SET email = ? WHERE id_usr = ?");
                $insertemail->execute(array($newemail, $_SESSION['id_usr']));
                header('Location: profil.php?id_usr='.$_SESSION['id_usr']);
            }
            if (isset($_POST['newpass']) AND !empty($_POST['newpass']) AND isset($_POST['newpass2']) AND !empty($_POST['newpass2'])) {
                $pass = sha1($_POST['newpass']);
                $pass2 = sha1($_POST['newpass2']);
                if ($pass == $pass2) {
                    $insertpass = $conn->prepare("UPDATE membres set pass = ? WHERE id_usr = ?");
                    $insertpass->execute(array($pass, $_SESSION['id_usr']));
                    header('Location: profil.php?id_usr='.$_SESSION['id_usr']);

                } else { 
                    $msg = "Your password doesn't match";
                }
            }
        } else {
            $msg = "No field change";
        }
    } else {
        header("Location: login.php");
    }
?>