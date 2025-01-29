<?php 
    session_start();
    if(!empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        updateHtml($mysql, $_SESSION['content_name'], $_POST['content_body']);
        header('location:admin.php');
    }
    else{
        header('location:login.php');
    }
?>