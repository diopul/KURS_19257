<head>
    <meta charset="UTF-8">
    <title>FireMonkey.com</title>
    <link rel="stylesheet" href="css/index.css">
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
<link href="reglogin.css" rel="stylesheet">
<form method="post" action="registration.php" name="signup-form">
<label style="color #fff;">Регистрация</label>
<br>
<br>
<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="register" value="register">Register
</button>
</form>
    </body>
