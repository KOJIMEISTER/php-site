<?php
    require_once 'include/db.php';
	require_once 'include/functions.php';
	$prod = getProd($mysql, $_GET['id']);
    $content = render('product_cont', array('prod'=>$prod));
    $base = render('base', array('content'=>$content));
    echo $base;
?>