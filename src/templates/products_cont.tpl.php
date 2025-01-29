<div class="container-prods">
    <?php foreach ($prods as $prod) : ?>
        <a href="product.php?id=<?php echo $prod['product_id'] ?>">
            <div class="container-elem">
                <div class="continer-elem-row">
                    <h3><?php echo $prod['product_name']; ?></h3>
                    <h3><?php echo $prod['product_length']; ?> м.</h3>
                </div>
                <div class="container-elem-row">
                    <img src='img/<?php echo $prod['type_name'] . '/';
                                    echo $prod['page_id']; ?>'>
                </div>
                <div class="container-elem-row">
                    <h3>Цена <?php echo $prod['product_price']; ?> руб</h3>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>