<?php
require('koneksi.php');
if (isset($_POST['daftar'])) {
    //ambil data dari form   
    $Username = $_POST['username'];
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Alamat = $_POST['alamat'];
    $Password = $_POST['password'];
    $Password2 = $_POST['password2'];
    $Role = 'Mahasiswa';
    $Aktif = '0';

    // Validasi kekuatan password
    $uppercase = preg_match('@[A-Z]@', $Password); 
    $lowercase = preg_match('@[a-z]@', $Password);
    $number    = preg_match('@[0-9]@', $Password);
    $specialChars = preg_match('@[^\w]@', $Password);

    //cek username sudah ada atau belom
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$Username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah pernah terdaftar');
            </script>
        ";
        return false;
    } else {
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 8) {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password harus terdiri dari 8 karakter atau lebih, terdapat huruf besar, huruf kecil, angka, dan spesial karakter!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {
            //buat token
            $token = hash('sha256', md5(date('Y-m-d')));
            //cek user terdaftar
            $sql_cek = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$Email'");
            $r_cek = mysqli_num_rows($sql_cek);
            if ($Password !== $Password2) {
                echo "<script>
                  alert('konfirmasi password tidak sesuai');
                  </script>";
            } else {
                //enkripsi password
                $Password = password_hash($Password, PASSWORD_DEFAULT);
                if ($r_cek > 0) {
                    echo '<script>
                    alert("Email sudah terdaftar");
                    document.location="registrasi.php";
                    </script>';
                } else {
                    $insert = mysqli_query(
                        $koneksi,
                        "INSERT INTO user VALUES ('','$Username', '$Nama', '$Email','$Alamat','$Password','$Role', '$token', '0')"
                    );
                    //include kirim email
                    include("mail.php");

                    if ($insert) {
                        echo '<div class="alert alert-success">
                            Pendaftaran anda berhasil, silahkan cek email anda untuk aktivasi. 
                            <a href="index.php">Login</a>
                        </div>';
                    }
                }
                return false;
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body{
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card bg-dark text-light" style="margin-top: 80px; margin-left:230px; width:45rem; opacity:75%">
                <div class="card-body">
                    <div class="card-title text-begin" style="padding-bottom: 1px;">
                        <h5>Welcome</h5>
                        <p class="text-muted">Register to get access</p>
                    </div>
                    <form action="" method="POST">
                        <div class="row justify-content-evenly">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Nama</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Username</label>
                                    <input type="text" class="form-control" name="username" required onkeypress="return runScript(event)">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Alamat</label>
                                    <div class="col-sm-12">
                                        <textarea name="alamat" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                    <div id="passwordHelpBlock" class="form-text">
                                        Password harus terdiri dari 8 karakter atau lebih, terdapat huruf besar, huruf kecil, angka, dan spesial karakter.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="password2" required>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary" name="daftar" style="margin-top: 15px;">Daftar</button>
                                </div>
                                <div class="form-group mt-4 text-end" style="font-size: 11pt;">
                                    Have an account? <a href="index.php" class="text-decoration-none" style="font-size:11pt">Login</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="footer margin-t text-center text-light" style="padding: 20px; "><small style="font-size: 10pt;">&copy; V3420068 SALSABILA QURROTUL AINI </small> </p>
        </div>
    </div>

    <script language="javascript" src="./mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>