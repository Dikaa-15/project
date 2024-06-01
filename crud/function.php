<?php


require 'koneksi.php';

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }

    return $rows;
}

function tambah($data) {
    // variable super global
    global $conn;

    //deklarsiin data apa aja yang mau dipost
    $nama_lengkap = $data["nama_lengkap"];
    $username = $data["username"];
    $password = $data["password"];
    $roles = $data["roles"];

    // bikin query
    $query = "INSERT INTO user VALUES (NULL, '$nama_lengkap', '$username', '$password', '$roles')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn); 

}

function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id_user"];
    $nama_lengkap = $data["nama_lengkap"];
    $username = $data["username"];
    $password = $data["password1"];
    $roles = $data["roles"];

    $query = "UPDATE user SET
    nama_lengkap = '$nama_lengkap',
    username = '$username',
    password = '$password',
    roles = '$roles'
    WHERE id_user = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>