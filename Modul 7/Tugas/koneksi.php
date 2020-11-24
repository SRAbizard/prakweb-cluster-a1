<!DOCTYPE html>
<html>
    <head>
        <title>Koneksi Database MySQLi</title>
    </head>
<body>
    <?php

    $koneksi = mysqli_connect("localhost", "root", "", "Kampus");

    if(mysqli_connect_errno()) {
        echo "Koneksi database gagal : " . mysqli_connect_errno();
    } else {
        echo "sukses";
    }

    ?>
</body>
</html>