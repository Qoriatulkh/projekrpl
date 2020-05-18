<?php 

include("config.php");

if(isset($_POST['Login'])){

    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM pendaftar WHERE uname=:NIK OR email=:Email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":uname" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["psw"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: sudahmasuk.html");
        }else {
        // kalau gagal tampilkan pesan
        header("Location: index.php");;}
    }
}
?>