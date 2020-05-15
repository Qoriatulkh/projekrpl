<?php

include("config.php");

if( isset($_GET['ID Pendaftar']) ){

    // ambil id dari query string
    $id = $_GET['ID Pendaftar'];

    // buat query hapus
    $sql = "DELETE FROM Pendaftar WHERE ID Pendaftar=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-Pendaftar.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>