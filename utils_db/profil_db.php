<?php
session_start();
    if (isset($_GET['id']) AND $_GET['id'] > 0) {
        $getid = intval($_GET['id']);
        $requser = $conn->prepare("SELECT * FROM membres WHERE id = ?");
        $requser->execute(array($getid));
        $userinfo = $requser->fetch(); 
    }
?>