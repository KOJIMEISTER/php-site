<div class="prod-cont">
    <h1><?php echo $prod[0]['product_name'] ?></h1>
    <section>
        <img src='img/<?php echo $prod[0]['type_name'] . '/';
                        echo $prod[0]['page_id'] ?>'>
        <section>
            <h2>Цена <?php echo $prod[0]['product_price'] ?> руб</h2>
            <h2>Купить</h2>
        </section>
    </section>
    <h2>Добавить в корзину</h2>
    <h2>Описание товара</h2>
    <h2><?php echo $prod[0]['product_desc'] ?></h2>
    <h2>Характеристика товара</h2>
    <ul>
        <li>
            <h2>Длина рулона <?php echo $prod[0]['product_length'] ?> метров</h2>
            <h2>Осталось на складе <?php echo $prod[0]['product_amm'] ?> штук</h2>
        </li>
    </ul>
</div>