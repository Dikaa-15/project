<?php

require 'function.php';

$nabung = query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id_user</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Option</th>
        </tr>

        <?php $no= 1; ?>
        <?php foreach ($nabung as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_lengkap"] ?></td>
                <td><?= $data["username"] ?></td>
                <td><?= $data["password"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data["id_user"]; ?>">Edit</a>
                    <a href="hapus.php?id=<?= $data["id_user"]; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>