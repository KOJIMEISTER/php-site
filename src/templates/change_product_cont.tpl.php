<div class="product-change-cont">
    <a href="admin.php">
        <button class="btn btn-primary">Назад</button>
    </a>
    <section>
        <ul>
            <li>
                <a href="insupdel_product.php?oper=ins">
                    <div class="prod-box">
                        <div class="prod-box-elems">
                            <img src="img/add.png">
                        </div>
                    </div>
                </a>
            </li>
            <?php foreach ($products as $product) : ?>
                <li>
                    <div class="prod-box">
                        <div class="prod-box-elems">
                            <img src="img/<?php echo $product['type_name'] ?>/<?php echo $product['page_id'] ?>">
                            <h2><?php echo "{$product['product_name']}" ?></h2>
                            <section>
                                <a href="insupdel_product.php?id=<?php echo "{$product['product_id']}" ?>&oper=upd">
                                    <button type="submit" class="btn btn-primary">Изменить</button>
                                </a>
                                <a href="insupdel_product.php?id=<?php echo "{$product['product_id']}" ?>&oper=del">
                                    <button type="submit" class="btn btn-primary">Удалить</button>
                                </a>
                            </section>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
</div>