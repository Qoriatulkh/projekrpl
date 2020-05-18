<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID Tes'];
    $Jadwal = $_POST['Jadwal'];
    $Hasil = $_POST['Hasil'];
    $Lokasi = $_POST['Lokasi Tes'];
    
    // buat query update
    $sql = "UPDATE Pendaftar SET ID Tes='$id Lokasi Tes='$Lokasi', Jadwal='$Jadwal', Hasil='$Hasil' WHERE ID Tes=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Jadwal.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>