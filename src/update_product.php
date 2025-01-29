<?php
    session_start();
    if(!empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        updProd($mysql, $_GET['id'], $_POST['product_name'], $_POST['product_price'],
        $_POST['product_length'], $_POST['page_id'], $_POST['product_amm'], $_POST['product_desc'],
        $_GET['type'], $_SESSION['login']);
        header('location:admin.php');
    }
    else {
        header('location:login.php');
    }
?>