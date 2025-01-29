<?php 
    session_start();
    if(!empty($_SESSION['login']))
    {
        require_once 'include/db.php';
        require_once 'include/functions.php';
        if($_GET['oper']=='del')
        {
            delProd($mysql, $_GET['id']);
            header('location:admin.php');
        }
        else {
            $type = $_SESSION['type_name'];
            $content = '';
            if($_GET['oper']=='ins')
            {
                $file = 'insert_product.php';
                $content = render('insupdel_product_cont', array('type'=>$type, 'file'=>$file, 'id'=>0, 
                'name'=>'', 'page'=>'', 'amm'=>0,
                'desc'=>'', 'length'=>0, 'price'=>0, 'oper_name'=>'Добавить'));
            }
            else if($_GET['oper']=='upd')
            {
                $prod = getProd($mysql, $_GET['id'])[0];
                $file = 'update_product.php';
                $content = render('insupdel_product_cont', array('type'=>$type, 'file'=>$file, 'id'=>$_GET['id'],
                'name'=>$prod['product_name'], 'page'=>$prod['page_id'], 'amm'=>$prod['product_amm'],
                'desc'=>$prod['product_desc'], 'length'=>$prod['product_length'], 'price'=>$prod['product_price'], 'oper_name'=>'Изменить'));
            }
            $base = render('base_clear', array('content'=>$content));
            echo $base;
        }
    }
    else {
        header('location:login.php');
    }
?>