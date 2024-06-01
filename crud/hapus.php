<?php

require 'function.php';

$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "<script type='text/javascript'>
            alert(' Yayy, Data Berhasil Dihapus')
            window.location = 'index.php'
          </script>";
}else{
    echo "<script type='text/javascript'>
            alert(' Noo, Data Gagal Dihapus')
            window.location = 'index.php'
          </script>";
}



?>