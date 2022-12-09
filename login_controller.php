<?php
    session_start();
    include('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = $connection->prepare("SELECT * FROM `User` WHERE `Login`='".$username."'");
    $query->execute();
    $stmt =  $query->fetch(PDO::FETCH_ASSOC);
    // var_dump( $stmt['password']);
if ($query && password_verify($password, $stmt['password']))
{
    $_SESSION["Name"] = $stmt['Login'];

    $_SESSION["user_in"] = true;
    header ('Location:'. 'index.php');
    echo 'Вошел';
}
else 
{
    echo 'Не вошел';
}