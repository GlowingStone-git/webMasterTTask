<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <section class="products">
        <div class="container">
            <div class="card-row">
                <?php
                    $res = file_get_contents('product.json');
                    $data = json_decode($res, true);
                    foreach( array_chunk(array_shift($data), 1) as $value) {
                        foreach ( $value as $item ) {
                        echo '
                        <div class="card">
                            <img class="card-img" src="'.$item["img"].'" alt="">
                            <div class="card-content">
                                <h3>'.$item["name"].'</h3>
                                <p class="card-price">'.$item["price"].'</p>
                                <button class="card-btn" id="open-button">Купить</button>
                            </div>
                        </div>
                        ';
                        }
                    }

                ?>
            </div>
        </div>
    </section>
    <div class="modal closed" id="modal">
        <!-- не скролиться -->
        <button class="modal-close-btn" id="close-button">Закрыть</button>
        <div class="modal-guts">
            <form action='mail.php' method="POST">
                <h2>Оформление заказа</h2>
                <input name="user_name" placeholder="Имя">
                <input name="user_phone" type="tel" placeholder="Номер телефона">
                <input name="user_email" type="email" placeholder="Email">
                <input name="user_product" type="text" placeholder="Название товара">
                <input type="submit" id="mySubmit" value="Отправить">
            </form>
        </div>
    </div>
    <div class="modal-overlay closed" id="modal-overlay"></div>
</body>
<script src="index.js"></script>

</html>
