<?php 
    require_once 'include/db.php';
    require_once 'include/functions.php';
    session_start();
    $login = $_POST['login'];
    $password = $_POST['password'];
    $res = auth($mysql, $login, $password);
    if($res[0]['admin_id']>0)
    {
        $_SESSION['login']=$res[0]['admin_name'];
        header('Location:admin.php');
    }
    else{
        header('Location:login.php');
    }
?>