<!DOCTYPE html>
<html>
    <head>
        <title>Menghapus Data Mahasiswa</title>
    </head>
    <body>
        <?php
            $hapus = $_POST["hapus"];
            $conn = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conn, "Kampus");
            $hasil = mysqli_query($conn, "select * from mahasiswa where nrp like '%$hapus%'");
            $jumlah = mysqli_num_rows($hasil);
            if($jumlah == 0) {
                echo "Tidak terdapat data dengan nrp $hapus <br>";
            } else {
                mysqli_query($conn, "delete from mahasiswa where nrp like '%$hapus%'");
                echo "Berhasil dihapus <br>";
            }
            echo "<br>";
        ?>
        <a href="form.html">Tambah Data Lagi</a>
    </body>
</html>