<?php

include("config.php");

if(isset($_POST['registrasi'])){

    // ambil data dari formulir
    $NIK = $_POST['NIK'];
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $Kota = $_POST['Kota'];
    $Kode_Pos = $_POST['kode_pos'];
    $Golongan_Darah = $_POST['golongan_darah'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // buat query
    $query = mysqli_query("INSERT INTO pendaftar( nik, nama, alamat, kota, kode_pos, golongan_Darah, email, password) VALUE ('$NIK', '$Nama', '$Alamat',  '$Kota', '$Kode_Pos', 'Golongan_Darah', 'Email', 'Password')");

    // apakah query simpan berhasil?
    if( $query== TRUE ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.html?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.html?status= gagal');
    }

} else {
    die("Akses dilarang...");
}
?>