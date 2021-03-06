<?php
if(isset($_POST['title'])){
    require './db_conn.php';

    $title = $_POST['title'];
    $new_title = stripslashes($title);

    if(empty($new_title)){
        header("Location: ./../todo/todo.php?mess=error");
    }else {
        if (get_magic_quotes_gpc()) {
            $stmt = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
            $res = $stmt->execute(stripslashes([$new_title]));
        } else {
            $stmt = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
            $res = $stmt->execute([$new_title]);
        }
        if($res){
            header("Location: ./../todo/todo.php?mess=success"); 
        }else {
            header("Location: ./../todo/todo.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ./../todo/todo.php?mess=error");
}