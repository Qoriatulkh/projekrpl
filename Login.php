<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'NIK', FILTER_SANITIZE_STRING);
    $Password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM Pendaftar WHERE NIK=:NIK OR Email=:Email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":NIK" => $username,
        ":Email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["Password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>

