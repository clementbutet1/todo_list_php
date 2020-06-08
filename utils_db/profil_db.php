<?php
session_start();
    if (isset($_GET['id_usr']) AND $_GET['id_usr'] > 0) {
        $getid = intval($_GET['id_usr']);
        $requser = $conn->prepare("SELECT * FROM membres WHERE id_usr = ?");
        $requser->execute(array($getid));
        $userinfo = $requser->fetch(); 
    }
?>