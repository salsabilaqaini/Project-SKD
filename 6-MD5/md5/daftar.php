<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }
    </style>
    <title>Daftar</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card bg-dark text-light" style="margin:auto; margin-top:50px; width:27rem; opacity: 75%;">
                <div class="card-body">
                    <div class="card-title text-center" style="padding-bottom: 15px;">
                        <h5>Welcome</h5>
                        <p class="text-muted">Register to get access</p>
                    </div>
                    <form action="inputdata.php" method="POST">
                        <div class="row justify-content-evenly">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 10pt;">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-size: 10pt;">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-size: 10pt;">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="row justify-content-evenly">
                                <button type="submit" class="btn btn-primary" name="daftar" style="margin-top: 15px;">Daftar</button>
                            </div>
                            <div class="form-group mt-4 text-center" style="font-size: 11pt; padding-bottom:10px;">
                                Have an account? <a href="index.php" class="text-decoration-none" style="font-size:11pt">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="footer margin-t text-center text-light" style="padding: 20px; "><small style="font-size: 10pt;">&copy; V3420068 SALSABILA QURROTUL AINI </small> </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>