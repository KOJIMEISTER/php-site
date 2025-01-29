<div class="insupdel-cont">
    <form action="<?php echo $file ?>?id=<?php echo $id ?>&type=<?php echo $type ?>" method="post">
        <div class="form_group">
            <h2>Название товара</h2>
            <input type="text" name="product_name" placeholder="Название товара" value="<?php echo $name ?>">
        </div>
        <div class="form_group">
            <h2>Название картинки</h2>
            <input type="text" name="page_id" placeholder="Название картинки" value="<?php echo $page ?>">
        </div>
        <div class="form_group">
            <h2>Количество товара</h2>
            <input type="text" name="product_amm" placeholder="Количество товара" value="<?php echo $amm ?>">
        </div>
        <div class="form_group">
            <h2>Описание товара</h2>
            <input type="text" name="product_desc" placeholder="Описание товара" value="<?php echo $desc ?>">
        </div>
        <div class="form_group">
            <h2>Длина товара</h2>
            <input type="text" name="product_length" placeholder="Длина товара" value="<?php echo $length ?>">
        </div>
        <div class="form_group">
            <h2>Цена товара</h2>
            <input type="text" name="product_price" placeholder="Цена товара" value="<?php echo $price ?>">
        </div>
        <button type="submit" class="btn btn-primary"><?php echo $oper_name?></button>
    </form>
    <a href="admin.php">
        <button class="btn btn-primary">Назад</button>
    </a>
</div>