<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID Pendaftar'];
    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $Kode_Pos = $_POST['Kode Pos'];
    $Golongan_Darah = $_POST['Golongan Darah'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    // buat query update
    $sql = "UPDATE Pendaftar SET NIK='$NIK Nama='$Nama', Alamat='$alamat', Kota='$Kota', Kode Pos='$Kode_Pos, Golongan Darah='$Golongan_Darah', Email='$Email', Password='$Password' WHERE ID Pendaftar=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Profile.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>