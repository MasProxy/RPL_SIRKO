<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'Selamat Datang'. ' '.$this->session->userdata('data_akun')[0]->nama;?>
    <br>
    <a href="<?php echo site_url('CKelas/masukLihatJadwal');?>" class="btn btn-primary "role="button" aria-disabled="true">Lihat Jadwal</a>
    <a href="<?php echo site_url('CKelas/masukLihatReservasi');?>" class="btn btn-primary "role="button" aria-disabled="true">Lihat Reservasi</a>
    <a href="<?php echo site_url('CKelas/Logout');?>" class="btn btn-primary "role="button" aria-disabled="true">Logout</a>
</body>
</html>