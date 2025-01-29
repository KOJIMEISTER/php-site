<div class="admin-cont">
    <h2>Администратор <?php echo $name ?></h2>
    <section>
        <h2>Страницы для изменения</h2>
        <ul>
            <?php foreach ($contents as $content) : ?>
                <li>
                    <a href="change_html.php?content_name=<?php echo $content['content_name'] ?>">
                        <button class="btn btn-primary"><?php echo $content['content_desc'] ?></button>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section>
        <h2>Группы товаров для изменения</h2>
        <ul>
            <?php foreach ($types as $type) : ?>
                <li>
                    <a href="change_product.php?type_name=<?php echo $type['type_name'] ?>">
                        <button class="btn btn-primary"><?php echo $type['type_desc'] ?></button>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section>
        <a href="index.php">
            <button class="btn btn-primary">
                На главное меню
            </button>
        </a>
        <a href="logout.php">
            <button lass="btn btn-primary">
                Выход
            </button>
        </a>
    </section>
</div>