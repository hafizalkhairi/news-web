<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h3>Laporan Berita <br> <?= date('d-m-Y', strtotime($_POST['dari'])) ?> s/d <?= date('d-m-Y', strtotime($_POST['sampai'])) ?></h3>
    </center>

    <table border="1" style="border-collapse: collapse; width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Judul Berita</th>
                <th>Tanggal Berita</th>
                <th>Isi Berita</th>
                <th>Gambar Berita</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'koneksi.php';
            $no = 1;

            if ($_POST['dari'] == '' && $_POST['sampai'] == '') {
                echo "<script>
                alert('Silahkan Pilih Tanggal Terlebih Dahulu')
                window.location.href='../?page=berita/index'
                </script>";
            } else {
                $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_berita 
                JOIN kategori ON tb_berita.id_kategori=kategori.id_kategori
                WHERE tanggal_berita BETWEEN '$_POST[dari]' AND '$_POST[sampai]'
                ORDER BY id_berita DESC");
            }
            while ($tampil = mysqli_fetch_array($ambildata)) {
                print "
                <tr style = 'text-align: center'>
                    <td>$no</td>
                    <td>$tampil[nama_kategori]</td>
                    <td>$tampil[judul_berita]</td>
                    <td>$tampil[tanggal_berita]</td>
                    <td >$tampil[isi_berita]</td>
                    <td ><img style = 'width: 150px' alt='gmbr' src='../berita/images/$tampil[gambar_berita]'></td>
                    <td><a class='btn btn-success fa fa-edit' href='?page=berita/ubah&kode=$tampil[id_berita]'></a>
                        <a class='btn btn-danger fa fa-trash' href='?page=berita/hapus&id_berita=$tampil[id_berita]'></a>
                    </td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

</body>

</html>