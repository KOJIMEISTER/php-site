<?php 
    session_start();
    if(!empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        $contents = getContNamesDescs($mysql);
        $types = getTypes($mysql);
        $content = render('admin_cont', array('name'=>$_SESSION['login'], 'contents'=>$contents, 'types'=>$types));
        $base = render('base_clear', array('content'=>$content));
        echo $base;
        unset($_SESSION['content_name']);
        unset($_SESSION['type_name']);
    }
    else
    {
        header('Location:login.php');
    }
?>