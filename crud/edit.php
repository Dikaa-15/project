<?php

require 'function.php';

$id = $_GET["id"];
$ediData = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(isset($_POST["edit"])) {
    if(edit($_POST) > 0) {
        echo "<script type='text/javascript'>
                alert('Yhayy, Data berhasil Diedit')
                window.location = 'index.php'
              </script>";
    }else{
        echo "<script type='text/javascript'>
                alert('Yhayy, Data berhasil Diedit')
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
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <input type="hidden" name="id_user" value="<?= $ediData["id_user"] ?>">
        <label for="">Nama Lengkap</label><br />
        <input type="text" name="nama_lengkap" required value="<?= $ediData["nama_lengkap"] ?>"><br /> <br />

        <label for="">Username</label><br />
        <input type="text" name="username" required value="<?= $ediData["username"] ?>"><br /> <br />

        <label for="">password</label><br />
        <input type="password" name="password" required value="<?= $ediData["password"] ?>"><br /> <br />
        <input type="hidden" name="roles" required><br /> <br />
        
        <button type="submit" name="edit">Tambah</button>
    </form>
</body>
</html>