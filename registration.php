<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM `User` WHERE `address`=:email");
        $query->bindParam("email", $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">Этот адрес уже зарегистрирован!</p>';
        }
        if ($query->rowCount() == 0) {
            //                             |           |
            $sql = "INSERT INTO `User` SET `Login` = '".$username."', `password` = '".$password_hash."', `address` = '".$email."'";
            $query = $connection->prepare( $sql);
            echo($sql);
            $result = $query->execute();
            if ($result) {
                $_SESSION["user_in"] = true;
                $_SESSION["Name"] = $username;
                header ('Location:'. 'index.php');
                echo '<p class="success">Регистрация прошла успешно!</p>';
            } else {
                echo '<p class="error">Неверные данные!</p>';
            }
        }
    }
?>
