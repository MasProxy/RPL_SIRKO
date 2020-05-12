<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>


    <a href="<?php echo site_url('CKelas');?>" class="btn btn-primary "role="button" aria-disabled="true">Kembali</a>
    <br>
    
    <table>
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
    
</body>
</html>