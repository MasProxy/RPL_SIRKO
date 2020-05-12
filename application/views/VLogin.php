<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <br>Selamat Datang di SIRKO UPI<br>
    <form action="<?php echo site_url('CAkun/verifikasi')?>" method="post">
        Username<br><input class="form-control" type="text" name="username"><br>
        Password<br> <input class="form-control" type="password" name="password"><br>
        <input class="" type="submit" name="submit" value="Masuk">
    </form>

</body>
</html>