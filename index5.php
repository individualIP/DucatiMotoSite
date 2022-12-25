<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/style.css'>
</head>

<body style="font-family:Verdana;">

    <div style="background-color:#f1f1f1;padding:15px;">
        <h1>Moto-Cross Sport Bike Ducati</h1>
        <h3>Официальный дистрибьютор</h3>
        <h3>Ducati — надёжное управление скоростью</h3>
    </div>

    <div style="overflow:auto">
        <div class="menu">
            <div class="menuitem">About</div>
            <div class="menuitem">Where</div>
            <div class="menuitem">Sale</div>
            <div class="menuitem">Trade In</div>
            <div class="menuitem">Отзыв</div>
        </div>

        <div class="main">
            <h2>Отзыв In Bike from Ducati</h2>
            <div class='f'>
                <img style="width:50%" src="https://static.vecteezy.com/system/resources/thumbnails/015/117/360/small/envelope-icon-in-black-colors-mail-signs-illustration-free-png.png">
                <!-- <img style='width:80%' src='img/photo_2022-12-19_20-12-18.jpg'> -->
<br><br>

                <form method="post" action="send.php">
                    <label>Name:</label>
                    <input type="text" name="name">

                    <label>Message:</label>
                    <textarea name="message"></textarea>

                    <input type="submit" name="btn">
                </form>

            </div>

        </div>

        <div class="right">
            <h2>Ducati</h2>
            <p>Дилер марки Ducati с большим ассортиментом мотоциклов, кожаных изделий, шлемов, перчаток, ботинок и товаров.</p>
            <h2>Ducati Motor Holding </h2>
            <p>итальянская компания по производству мотоциклов, штаб-квартира находится в районе Борго Панигале города Болонья. Ducati принадлежит немецкому производителю автомобилей </p>

        </div>
    </div>


    <div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> This web page is a part of a demonstration of fluid web design made by w3schools.com. Resize the browser window to see the content respond to the resizing.</div>

</body>

</html>