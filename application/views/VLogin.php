<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .bg{
            background-image: url("<?php echo base_url('images/isola.jpg')?>");

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            position: absolute;
            top:0;bottom:0;left:0;right:0;
            z-index: -999;
        }

        .wrapper{
            margin-left: 40%;
            margin-right: 40%;
            opacity: .90;
        }

        img{
            max-width: 100%;
            max-height: 100%;
        }

        form{
            text-align: center;
            margin-left: 10%;
            margin-right: 10%;
            width: 80%;
        }

        .form-control{
            text-align: center;
            display: inline-block;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></head>
<body>
    <div class="bg">

    </div>

    <div class="row">
        <div class="col-sm-1"><a class="navbar-brand" ><img src="<?php echo base_url()?>images/upi.jpg"></a></div>
        <div class="col-2"><h1 style="font-size:40px">SIRKO</h1><h2 style="font-size:12px">Universitas Pendidikan Indonesia</h2></div>
    </div>
    <br>
    <br>
    <p>
        <div class="card wrapper">
            <form action="<?php echo site_url('CAkun/verifikasi')?>" method="post">
                <div class="form-group">
                    <br>
                    Username<br><input class="form-control" type="text" name="username"><br><br>
                    Password<br> <input class="form-control" type="password" name="password"><br>
                    <?php
                        if($this->session->userdata('data_notif')==-1){
                            echo'
                            <p class="text-danger">Username atau Password Salah!</p>
                            ';
                            $this->session->set_userdata('data_notif',0);
                        }
                    ?>
                    <input class="btn btn-primary" type="submit" name="submit" value="Masuk">
                </div>
            </form>
        </div>
    </p>
</body>
</html>