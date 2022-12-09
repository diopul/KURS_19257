<?php 
    session_start();
    include('config.php');
    
    $user = null;

    if (isset($_SESSION["Name"])) {
        $user = $connection->query("SELECT * FROM `User` WHERE `Login`='".$_SESSION["Name"]."'")->fetch();
    };

    if (isset($_POST["Login"])) {
        if ($_POST["password"] == "") $_POST["password"] = $user["password"];
        else $_POST["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT);

        if ($_POST["dateofBerth"] == "") $_POST["dateofBerth"] = date('Y-m-d', time());

        $query = $connection->prepare("UPDATE `User` SET `Login` = :Login, `name` = :name, `surname` = :surname, `dateofBerth` = :dateofBerth, `Region` = :Region, `address` = :address, `password` = :password WHERE `Login`='".$_SESSION["Name"]."'");
        $query->execute($_POST);

        $user = $connection->query("SELECT * FROM `User` WHERE `Login`='".$_SESSION["Name"]."'")->fetch();
    };
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
            
            if (!isset($_SESSION["user_in"]))
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
                        <a href="index.php">
                        <img class="scale" src="img/Главная.png" height="65" width="260"/>
                        </a>
                        <a href="exit.php">
                        <img class="scale" src="img/Выйти.png" height="65" width="260"/>
                        </a>

                    </div>
                ');
            }
        ?>
        <br>
        <form action="" method="POST">
            <div class='in'>
                Логин
            <input name='Login' type="text" value="<?php echo($user["Login"]); ?>" class="redacting">
                Имя
            <input name='name' type="text" value="<?php echo($user["name"]); ?>" class="redacting">
                Фамилия
            <input name='surname' type="text" value="<?php echo($user["surname"]); ?>" class="redacting">
            День рождения
            <input name='dateofBerth' type="text" value="<?php echo($user["dateofBerth"]); ?>" class="redacting">
            Регион
            <input name='Region' type="text" value="<?php echo($user["Region"]); ?>" class="redacting">
                Почта
            <input name='address' type="text" value="<?php echo($user["address"]); ?>" class="redacting">
                Пароль
            <input name='password' type="text" class="redacting">
                <input type="submit" value="Сохранить">
                </div>
        </form>


</body>
</html>