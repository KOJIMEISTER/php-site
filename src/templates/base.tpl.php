<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Обои Сейл</title>
</head>

<body>
    <div class="wrapper-base">
        <div class="container-base">
            <div class="sidemenu">
                <ul>
                    <li>
                        <a href="index.php">Главная страница</a>
                    </li>
                    <li>
                        <a href="author.php">О авторе</a>
                    </li>
                    <li>
                        <a href="corpo.php">О фирме</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="decor.php">Декоративные обои</a>
                    </li>
                    <li>
                        <a href="paint.php">Обои под покраску</a>
                    </li>
                    <li>
                        <a href="photo.php">Фотообои</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="login.php">Вход</a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <header>
                    <div class="backImg"></div>
                </header>
                <main>
                    <?php echo $content ?>
                </main>
                <footer>
                    <h2>
                        © ООО"ОбоиСейл" <a href="https://mail.ru">oboi@mail.ru</a>
                    </h2>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>