<?php
require 'koneksi.php';

//menangkap data yang dikirim dari form
if(isset($_POST['login'])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    //menyeleksi data user dengan username dan password yg sesuai
    $query = mysqli_query($koneksi, "SELECT * FROM  user WHERE username = '$Username'");

    //mengecek data yang ditemukan
    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if($cek>0) {
        //login username tersedia --> verify password
        if(password_verify($Password, $data['password'])) {
            session_start();
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = $data['role'];
            echo'
            <script>
                alert("Anda telah berhasil login sebagai '.$data['role'].'");
                window.location.href="page.php";
            </script>';
        } else {
            echo'
            <script>
                alert("Login gagal, silakan coba lagi!");
                window.location.href="index.php";
            </script>';
       }  
    }else{
        //data tidak di temukan
        echo'
        <script>
            alert("Username tidak tersedia");
            window.location.href="index.php";
        </script>';
    }
    $mysqli->close();
}
?>