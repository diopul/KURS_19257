<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FireMonkey.com</title>
    <link rel="stylesheet" href="css/index3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <script src="index.js"></script>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
<div class="header">
    <div class="logo">
        <a href="index.html">
            <img class="scale" src="img/logo.png" height="200" width="420"/>
        </a>
    </div>
</div>


<div class="main">
    <hr style="border: 2px solid white; width: 550px; border-radius: 10px; box-shadow: 0 0 40px  white;">
    <h1>
        <?php 
            
            if (!$_SESSION["user_in"])
            {
                echo('
                    <div class="buy">
                        <a href="register.php">
                            <img class="scale" src="img/Регистрация.png" height="65" width="260"/>
                        </a>
                        <a href="login.php">
                            <img class="scale" src="img/Авторизация.png" height="65" width="260"/>
                        </a>

                    </div>
                ');
            }
            else{
                echo($_SESSION["Name"]);
                echo('
                    <div class="buy">
                        <a href="Profil.php">
                        <img class="scale" src="img/Профиль.png" height="65" width="260"/>
                        </a>
                        <a href="exit.php">
                        <img class="scale" src="img/Выйти.png" height="65" width="260"/>
                        </a>
                        <a href="donat.php">
                        <img class="scale" src="img/Пожертвование.png" height="65" width="260"/>
                    </a>

                    </div>
                ');
            }
        ?>
        
        <h style="font-size: 40px;     font-style: italic;">
        Компания Fire Monkey - это небольшая компания молодных интузиастов любящих компьютерные игры, и они решили создать котроллер который будет не похож на остальные
        У них это почти получилось, но есть одна проблема. У них нет средств на реализацию, поэтому они разработали этот сайт, на котором вы можете ознакомиться с их работой, а также задонатить.
        </h>
        <br>

        FiMoCo
    </h1>
    <h1 style="margin-top: -40px">
        Лучший геймпад для тех, кто привык к клавиатуре!
    </h1>


    <a class="slider_controller">
        <section id="slider_bl">
            <div class="wrapper">
                <input checked type=radio name="slider" id="slide1"/>
                <input type=radio name="slider" id="slide2"/>
                <input type=radio name="slider" id="slide3"/>
                <div class="slider-wrapper">
                    <div class=inner>
                        <article>
                            <div class="info top-left">
                                <h3></h3></div>
                            <img src="https://i.ibb.co/C0yVsdb/cntrl.png"/>
                        </article>
                        <article>
                            <div class="info bottom-right">
                                <h3></h3></div>
                            <img src="https://i.ibb.co/JK64vSs/cntlr2-1.png"/>
                        </article>
                        <article>
                            <div class="info bottom-left">
                                <h3></h3></div>
                            <img src="https://i.ibb.co/0qX0Q47/cntlr2.png"/>
                        </article>
                    </div>
                </div>
                <div class="slider-prev-next-control">
                    <label for=slide1></label>
                    <label for=slide2></label>
                    <label for=slide3></label>

                </div>
                <div class="slider-dot-control">
                    <label for=slide1></label>
                    <label for=slide2></label>
                    <label for=slide3></label>
                </div>
            </div>
        </section>
        <br>
        <br>


        <hr style="border: 2px solid white; width: 550px; border-radius: 10px; box-shadow: 0 0 40px  white;">



        <h style="font-size: 40px;     font-style: italic;">
        <br>
        Наша команда разроботчиков подошла к созданию этого продукта с особенным подход.
        <br>
        Мы долго анализировали поведение рук игроков, играющих на клавиатурею.
        <br>
        Проводили тестирование cреди наших друзей и знакомых, чтобы учесть все нюансы созданного нами продукта.
        <br>
        </h>
        <br>

        <h class="design" style="border: 3px solid grey; border-radius: 20px; background: grey;">

            Примеры наших работ

        </h >
        <div id="element" style="margin-top: 5px; margin-left: 190px">
            <div class="overflow"></div>
            <a class="lake" alt="aaaaokijojkjl" href="">
                <img src="img/skin.png" class="scale" height="550" width="800">
            </a>
            <a class="lake" alt="aaaaokijojkjl" href="">
                <img src="img/skin2.png" class="scale" height="550" width="800">
            </a>
            <a class="lake" alt="aaaaokijojkjl" href="">
                <img src="img/skin3.png" class="scale" height="550" width="800">
            </a>

        </div>
        


        <br>

        <hr style="border: 2px solid white; width: 550px; border-radius: 10px; box-shadow: 0 0 40px  white;">


        <br>
        <br>


        <h class="specifications" style="border: 3px solid grey; border-radius: 20px; background: grey;">
            Особенности:
        </h>


        <br>
        <br>

        <h style="font-size: 40px;     font-style: italic;">
            "TouchPad Нового поколения"
            <br>
            ●●●
            <br>
            <div class="touchpad" style="font-size: 30px;">
                Возможность назначать до четырех команд на TouchPad
                <br>
                <hr style="border: 1px solid white; width: 100px; border-radius: 10px; box-shadow: 0 0 40px  white;">
                Гибкая настройка TouchPad'а
                <br>
                <hr style="border: 1px solid white; width: 100px; border-radius: 10px; box-shadow: 0 0 40px  white;">
                Soft-Touch материалы
            </div>
        </h>
        <img style="border: 1px solid none; border-radius: 25px;" src="img/touchpad.png" height="400" width="600"/>
        <br>
        <br>
        <h style="font-size: 40px;     font-style: italic;">
            Планируется:
            <br>
            Официальная сертификация топовых брендов;
            <br>
            Изготовление  дополнительных акксесуаров;
            <br>
            ●●●
            <br>
        </h>

        <br>

        <br>
        <br>
        <br>


        <hr style="border: 2px solid white; ; border-radius: 10px; box-shadow: 0 0 40px  white;">

        <div style="font-size: 30px;     font-style: italic;">

            FAQ
            <br>
            <br>
            В наше время краудфандинговые платформы являются хорошим вариантом для реализации своей идеи или проекта. Единомышленники могу помочь финансово в реализации планов и всю эту информацию можно будет хранить в базе данных. Для того, чтобы собирать информацию о людях которым интересна эта идея.
	Можно бдует собирать информацию о возрасте потенциальных покупателей данного продукта, географическое местоположение и даже личные пожелания к продукту.
<br>
<br>
Разработчик
<br>
https://vk.com/kqbert
<br>
<br>

</div>


</div>


</body>
</html>