<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $Kode_Pos = $_POST['Kode Pos'];
    $Golongan_Darah = $_POST['Golongan Darah'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    // buat query
    $sql = "INSERT INTO pendaftar( NIK, Nama, Alamat, Kota, Kode Pos, Golongan Darah, Email, Password) VALUE ('$NIK', '$Nama', '$Alamat',  '$Kota', '$Kode_Pos', 'Golongan_Darah', 'Email', 'Password')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>