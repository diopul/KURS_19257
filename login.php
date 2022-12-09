<link href="reglogin.css" rel="stylesheet">
<?php
session_start();
$_SESSION["user_in"] = false;

?>
<form method="post" action="login_controller.php" name="signin-form">
  <div class="form-element">
    <label>Авторизация</label>
    <br>
    <br>
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>
