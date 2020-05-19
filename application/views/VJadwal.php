<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        text-align: center;
    }
    table{
        margin-left:auto; 
        margin-right:auto;
        text-align: center;
    }
    a{
        text-align: center;
    }
    table.table-bordered > thead > tr > th{
        border:2px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border:2px solid black;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></head>
</head>
<body>
<div class="p-3 mb-2 bg-danger"></div>
<a href="<?php echo site_url('CKelas/ambilKelasGedung');?>" class="btn btn-primary "role="button" aria-disabled="true">Kembali</a>
    <div class="row">
        <div class="col-sm text-center"><?php echo 'Selamat Datang'. ' '.$this->session->userdata('data_akun')[0]->nama;?></div>
    </div>
    <br>
    <br>
    <table class="table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Mata Kuliah</th>
            <th>Jurusan</th>
            <th>Hari</th>
            <th>Waktu</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $no=1;
                foreach($this->session->userdata('data_jadwal') as $d){
                    if($this->session->userdata('data_akun')[0]->jabatan!="admin"){
                        echo'
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$d->kode_kelas.'</td>
                            <td>'.$d->mata_kuliah.'</td>
                            <td>'.$d->jurusan.'</td>
                            <td>'.$d->hari.'</td>
                            <td>'.$d->jam_mulai.'-'.$d->jam_selesai.'</td>
                        </tr>
                        ';
                    }else{
                        echo'
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$d->kode_kelas.'</td>
                            <td>
                                <form action="'.site_url('CJadwal/masukEditJadwal').'" method="post">
                                    <input type="hidden" name = "tampungid" value="'.$d->id_jadwal.'">
                                    <input class="form-control-plaintext" type="submit" name="submit" value="'.$d->mata_kuliah.'">
                                </form>
                            </td>
                            <td>'.$d->jurusan.'</td>
                            <td>'.$d->hari.'</td>
                            <td>'.$d->jam_mulai.'-'.$d->jam_selesai.'</td>
                        </tr>
                        ';
                    }
                }
            ?>
        </tbody>
    </table>

    <br><br>
        <div class="row">
            <div class="col-sm text-center"><a href="<?php echo site_url('CKelas/masukAjukanReservasi');?>" class="btn btn-primary "role="button" aria-disabled="true">Reservasi Kelas Kosong</a></div>
        </div>
</body>
</html>