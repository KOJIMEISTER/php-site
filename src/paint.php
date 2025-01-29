<?php
    require_once 'include/db.php';
	require_once 'include/functions.php';
	$prods = getProds($mysql, 'paint');
    $content = render('products_cont', array('prods'=>$prods));
    $base = render('base', array('content'=>$content));
    echo $base;
?>