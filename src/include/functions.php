<?php
    function getProds($mysql, $type)
    {
        $sql = "SELECT * FROM product WHERE type_name = '".$type."'";
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function getProd($mysql, $id)
    {
        $sql = "SELECT * FROM product WHERE product_id = ".$id;
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function getContent($mysql, $name)
    {
        $sql = "select content_body from contents where content_name = '{$name}'";
        $result = mysqli_query($mysql, $sql);
        return mysqli_fetch_assoc($result);
    }
    function getContNamesDescs($mysql)
    {
        $sql = "SELECT content_name, content_desc FROM contents";
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function getTypes($mysql)
    {
        $sql = "SELECT * FROM types";
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function updateHtml($mysql, $content_name, $content_body)
    {
        $sql = "update contents set content_body ='{$content_body}' where content_name = '{$content_name}'";
        mysqli_query($mysql, $sql);
    }
    function auth($mysql, $login, $password)
    {
        $sql = "SELECT * FROM admins where admin_name = '{$login}' and admin_pass = MD5('{$password}')";
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function delProd($mysql, $prod_id)
    {
        $sql = "DELETE FROM product where product_id = {$prod_id}";
        mysqli_query($mysql, $sql);
    }
    function updProd($mysql, $product_id, $product_name, $product_price, $product_length, $page_id, $product_amm, $product_desc, $type_name, $created_by)
    {
        $sql = "update product set product_name = '{$product_name}', product_price = {$product_price},
        product_length = {$product_length}, page_id = '{$page_id}', product_amm = {$product_amm},
        product_desc = '{$product_desc}', type_name = '{$type_name}', created_by = '{$created_by}'
        where product_id = {$product_id}";
        mysqli_query($mysql, $sql);
    }
    function insProd($mysql, $product_name, $product_price, $product_length, $page_id, $product_amm, $product_desc, $type_name, $created_by)
    {
        $sql = "insert into product (product_name, product_price, product_length, page_id, product_amm, product_desc, type_name, created_by) 
        VALUES('{$product_name}', {$product_price}, {$product_length}, '{$page_id}', {$product_amm}, '{$product_desc}', 
        '{$type_name}', '{$created_by}')";
        mysqli_query($mysql, $sql);
    }
    function render($tmp,$vars = array()) {
        if(file_exists('templates/'.$tmp.'.tpl.php')) {
            ob_start();
            extract($vars);
            require 'templates/'.$tmp.'.tpl.php';
            return ob_get_clean();
        }
    }
?>