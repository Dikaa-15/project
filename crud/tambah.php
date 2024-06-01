<?php

require 'function.php';

if(isset($_POST["tambah"])) {
    if(tambah($_POST) > 0 ) {
        echo "<script type='text/javascript'>
                alert('Yey.. Data Berhasil Ditambahkan')
                window.location = 'index.php'
              </script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Noo.. Data Gagal Ditambahkan')
        window.location = 'index.php'
      </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa SMK Jakarta Pusat 1</title>
</head>
<body>

    <form action="" method="POST">
        <label for="">Nama Lengkap</label><br />
        <input type="text" name="nama_lengkap" required><br /> <br />

        <label for="">Username</label><br />
        <input type="text" name="username" required><br /> <br />

        <label for="">password</label><br />
        <input type="password" name="password" required><br /> <br />
        <input type="hidden" name="roles" required><br /> <br />
        
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>