<!DOCTYPE html>
<html>
    <head>
        <title>Menambah Data Mahasiswa</title>
    </head>
    <body>
        <?php
            $nrp = $_POST["nrp"];
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $jurusan = $_POST["jurusan"];
            $conn = mysqli_connect("localhost", "root", "")
            or die("koneksi gagal");
            mysqli_select_db($conn, "Kampus");
            echo "NRP       : $nrp <br>";
            echo "Nama      : $nama <br>";
            echo "Alamat    : $alamat <br>";
            echo "ID Jurusan   : $jurusan <br>";
            $sqlstr = "insert into mahasiswa (nrp, nama, alamat, id_jur) values ('$nrp','$nama','$alamat','$jurusan')";
            $hasil = mysqli_query($conn, $sqlstr);
            echo "<br>";
            echo "Data berhasil disimpan! <br>";
            echo "<br>";
        ?>
        <a href="form.html">Tambah Data Lagi</a>
    </body>
</html>