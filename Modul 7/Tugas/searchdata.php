<!DOCTYPE html>
<html>
    <head>
        <title>Mencari Data Mahasiswa</title>
    </head>
    <body>
        <?php
            $cari = $_POST["cari"];
            $conn = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conn, "Kampus");
            $hasil = mysqli_query($conn, "select * from mahasiswa where nama like '%$cari%'");
            $jumlah = mysqli_num_rows($hasil);
            echo "<br";
            echo "Ditemukan: $jumlah <br>";
            while($baris = mysqli_fetch_array($hasil)) {
                echo "NRP : ";
                echo $baris[0]."<br>";
                echo "Nama : ";
                echo $baris[1]."<br>";
                echo "Alamat : ";
                echo $baris[2]."<br>";
                echo "ID Jurusan : ";
                echo $baris[3]."<br>";
                echo "<br>";
            }
        ?>
        <a href="form.html">Tambah Data Lagi</a>
    </body>
</html>