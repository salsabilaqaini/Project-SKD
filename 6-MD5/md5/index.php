<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status']!="login") {
        header("location:login.php");
    }
    ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php" onclick="return confirm('Apakah anda yakin akan logout?')">
                <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang, <?= $_SESSION['nama'] ?>!</h4>
        </div>
    </div>
</body>

</html>