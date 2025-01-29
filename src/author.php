<?php
    require_once 'include/db.php';
	require_once 'include/functions.php';
    $content = $content = getContent($mysql, 'author')['content_body'];
    $base = render('base', array('content'=>$content));
    echo $base;
?>