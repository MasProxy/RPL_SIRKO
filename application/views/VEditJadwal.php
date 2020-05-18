<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .bg{
            background-image: url("<?php echo base_url('images/upi.jpg')?>");
            opacity: .25;

            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;

            position: absolute;
            top:0;bottom:0;left:0;right:0;
            z-index: -999;
        }
    table{
        margin-left:auto; 
        margin-right:auto;
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRKO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg"></div>
    <table class="table-bordered">
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
                foreach($this->session->userdata('data_jadwal_pilihan') as $d){
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
                }
            ?>
        </tbody>
    </table>
    <form action="<?php echo site_url('CJadwal/editJadwal')?>" method="post">
        Kelas<br>
        <select class="custom-select" name="kelas">
            <option selected>Pilih Kelas</option>
            <?php
            foreach($this->session->userdata('data_semua_kelas') as $d){
                echo'
                <option value="'.$d->id.'">'.$d->kode_kelas.'</option>               
                ';
            }
            ?>
            
        </select>
        
        Hari<br>
        <select class="custom-select" name="hari">
            <option selected>Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jum'at">Jum'at</option>
            
        </select><br>
        Jam Mulai<br> <input class="form-control" type="text" name="jam_mulai">
        Jam Selesai<br> <input class="form-control" type="text" name="jam_selesai">
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="SIMPAN">
    </form>
    <a href="<?php echo site_url('CJadwal');?>" class="btn btn-secondary "role="button" aria-disabled="true">Kembali</a>
</body>
</html>