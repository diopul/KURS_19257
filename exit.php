<?php
    session_start();
    $_SESSION["user_in"] = false;
    $_SESSION["Name"] = null;
    header ('Location:'. 'index.php');