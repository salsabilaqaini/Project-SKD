<?php

require 'koneksi.php';

if (isset($_POST['daftar'])) {
    //ambil data dari form   
    $username = $_POST['username'];
    $password = mysqli_escape_string($conn, $_POST['password']);
    $nama = addslashes($_POST['nama']);
    $email = $_POST['email'];

    //cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah pernah terdaftar');
                window.location.href='daftar.php';
            </script>
        ";
        return false;
        
    } else {
        //enkripsi password
        $password = password_hash($password, PASSWORD_BCRYPT);

        $sql = mysqli_query($conn, "INSERT INTO user VALUES ('$username','$password','$nama','$email')");
        echo "
            <script>
                alert('Registrasi berhasil');
                window.location.href='login.php';
            </script>
        ";
    }
}
