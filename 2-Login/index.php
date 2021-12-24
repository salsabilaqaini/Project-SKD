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
            <div class="card bg-dark text-light" style="margin-top: 90px; margin-left:375px; width:25rem; opacity: 75%;">
                <div class="card-body">
                    <div class="card-title text-center" style="padding-bottom: 15px;">
                        <h5>Welcome</h5>
                        <p class="text-muted">Sign in to continue</p>
                    </div>
                    <form action="ceklog.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" style="font-size: 10pt;">Username</label>
                            <input type="text" class="form-control" name="username" required onkeypress="return runScript(event)">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-size: 10pt;">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="row justify-content-evenly">
                            <button type="submit" class="btn btn-primary" name="login" style="margin-top: 15px;">Login</button>
                        </div>
                        <div class="form-group mt-4 text-center" style="font-size: 11pt; padding-bottom:10px;">
                            Don't have an account? <a href="registrasi.php" class="text-decoration-none" style="font-size:11pt">Register</a>
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