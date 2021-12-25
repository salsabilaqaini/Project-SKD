<?php

require 'koneksi.php';

if (isset($_POST['daftar'])) {
    //ambil data dari form   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_sha1 = sha1($password);
    $nama = $_POST['nama'];
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
        $sql = mysqli_query($conn, "INSERT INTO user VALUES ('$username','$nama','$email','$password_sha1')");
        echo "
            <script>
                alert('Registrasi berhasil');
                window.location.href='login.php';
            </script>
        ";
    }
}
