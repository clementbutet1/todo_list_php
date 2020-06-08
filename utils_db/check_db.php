<?php

if(isset($_POST['id_usr'])){
    require './db_conn.php';

    $id_usr = $_POST['id_usr'];

    if(empty($id_usr)){
       echo 'error';
    }else {
        $todos = $conn->prepare("SELECT id_usr, checked FROM todos WHERE id_usr=?");
        $todos->execute([$id_usr]);

        $todo = $todos->fetch();
        $uId = $todo['id_usr'];
        $checked = $todo['checked'];

        $uChecked = $checked ? 0 : 1;

        $res = $conn->query("UPDATE todos SET checked=$uChecked WHERE id_usr=$uId");

        if($res){
            echo $checked;
        }else {
            echo "error";
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ./../todo/todo.php?mess=error");
}