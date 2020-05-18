<?php

include("config.php");

if( isset($_GET['ID Pendaftar']) ){

    // ambil id dari query string
    $id = $_GET['ID Tes'];

    // buat query hapus
    $sql = "DELETE FROM tes WHERE ID Tes=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: jadwal.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>