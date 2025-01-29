<?php
    session_start();
    if(empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        $content = render('login_cont');
        $base = render('base_clear', array('content'=>$content));
        echo $base;
    }
    else{
        header('Location:admin.php');
    }
?>