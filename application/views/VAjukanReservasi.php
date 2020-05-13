<!DOCTYPE html>
<html lang="en">
<head>
<style>
    form{
            text-align: center;
            margin-left: 35%;
            margin-right: 35%;
            width: 30%;
        }

    .form-control{
            text-align: center;
            display: inline-block;
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengajukan Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></head>
</head>
<body>
    <table class="table-Bordered">
        <thead>
            <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Jurusan</th>
            <th>Hari</th>
            <th>Mata Kuliah</th>
            <th>Waktu</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $no=1;
                foreach($this->session->userdata('data_jadwal') as $d){
                    echo'
                    <tr>
                        <td>'.$no.'</td>
                        <td>'.$d->kode_kelas.'</td>
                        <td>'.$d->jurusan.'</td>
                        <td>'.$d->hari.'</td>
                        <td>'.$d->mata_kuliah.'</td>
                        <td>'.$d->jam_mulai.'-'.$d->jam_selesai.'</td>
                    </tr>
                    ';
                }
            ?>
        </tbody>
    </table>

    <form action="<?php echo site_url('CKelas/tambahReservasi')?>" method="post">
        Hari<br><input class="form-control" type="text" name="hari"><br><br>
        Waktu<br><input class="form-control" type="text" name="waktu"><br><br>
        Alasan<br> <input class="form-control" type="text" name="alasan"><br><br>
        <br>
        <input class="" type="submit" name="submit" value="Ajukan Reservasi">
    </form>
</body>
</html>