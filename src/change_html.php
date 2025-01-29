<?php 
    session_start();
    if(!empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        $_SESSION['content_name'] = $_GET['content_name'];
        $body = getContent($mysql, $_GET['content_name']);
        $content = render('change_html_cont', array('content_body'=>$body));
        $base = render('base_clear', array('content'=>$content));
        echo $base;
    }
    else {
        header('Location:login.php');
    }
?>