
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Kategori</title>
</head>
<body>
    <h1>Ubah Data Kategori</h1>
    <?php
        include 'koneksi.php';

        $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori=$_GET[kode]");
        $tampil = mysqli_fetch_array($query);
    ?>
    <form action="" method="post">
        <label for="">Nama Kategori</label>
        <input type="text" name="nama_kategori" value="<?php print $tampil['nama_kategori']?>" required autofocus>

        <button name="proses" type="submit">Simpan</button>

    </form>
</body>
</html>

<?php
    if(isset($_POST['proses'])){
        mysqli_query($koneksi, "UPDATE kategori SET
            nama_kategori = '$_POST[nama_kategori]'

            WHERE id_kategori = '$_GET[kode]' 
        ");
     print"<script>
        alert('Data berhasil diubah')
        window.location.href='index.php'
     </script>";
    }
?>