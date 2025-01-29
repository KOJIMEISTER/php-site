<?php
    session_start();
    if(!empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        $_SESSION['type_name'] = $_GET['type_name'];
        $products = getProds($mysql, $_GET['type_name']);
        $content = render('change_product_cont', array('products'=>$products));
        $base = render('base_clear', array('content'=>$content));
        echo $base;
    }
    else{
        header('location:login.php');
    }
?>