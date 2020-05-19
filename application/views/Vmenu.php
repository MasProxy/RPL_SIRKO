<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></head>
</head>
<body>
    <div class="p-3 mb-2 bg-danger"></div>
    <div class="row">
        <div class="col text-center"><h1 style="font-size:60px" class="text-red">SIRKO</h1><h2 style="font-size:20px; font-color: solid red">Universitas Pendidikan Indonesia</h2></div>
    </div>
    <div class="row">
        <div class="col text-center"><?php echo 'Selamat Datang'. ' '.$this->session->userdata('data_akun')[0]->nama;?></div>
    </div>

    <br>
    <div class="col text-center"><a href="<?php echo site_url('CKelas/masukLihatJadwal');?>" class="btn btn-primary "role="button" aria-disabled="true">Lihat Jadwal</a></div>
    <br>
    <div class="col text-center"><a href="<?php echo site_url('CKelas/masukLihatReservasi');?>" class="btn btn-primary "role="button" aria-disabled="true">Lihat Reservasi</a></div>
    <br>
    <div class="col text-center"><a href="<?php echo site_url('CKelas/Logout');?>" class="btn btn-primary "role="button" aria-disabled="true">Logout</a></div>
</body>
</html>