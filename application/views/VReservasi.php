<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRKO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></head>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Pengaju</th>
            <th>Kode Kelas</th>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Alasan</th>
            <th>Status</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                $no=1;
                foreach($this->session->userdata('data_reservasi') as $d){
                    if($this->session->userdata('data_akun')[0]->jabatan!="admin"){
                        echo'
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$d->nama.'</td>
                            <td>'.$d->kode_kelas.'</td>
                            <td>'.$d->hari.'</td>
                            <td>'.$d->waktu.'</td>
                            <td>'.$d->alasan.'</td>
                            <td>'.$d->status_reservasi.'</td>
                        </tr>
                        ';
                    }else{
                        echo'
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$d->nama.'</td>
                            <td>'.$d->kode_kelas.'</td>
                            <td>'.$d->hari.'</td>
                            <td>'.$d->waktu.'</td>
                            <td>'.$d->alasan.'</td>
                            <td>'.$d->status_reservasi.'</td>
                            <td>testtt</td>
                        </tr>
                        ';
                    }
                }
            ?>
        </tbody>
    </table>
    <a href="<?php echo site_url('CKelas');?>" class="btn btn-primary "role="button" aria-disabled="true">Kembali</a>
</body>
</html>