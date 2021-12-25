<?php
require 'koneksi.php';
$teks_md5 = $teks_sha1 = '';
if (isset($_POST['enkripsi'])) {
    //ambil data dari form   
    $teks = $_POST['teks'];
    $teks_md5 = md5($teks);
    $teks_sha1 = sha1($teks);

    $sql = mysqli_query($conn, "INSERT INTO enkrip VALUES ('$teks','$teks_md5','$teks_sha1')");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Enkripsi MD5</title>
</head>

<body>
    <div class="container">
        <h3 style="text-align: center; margin-top: 30px; margin-bottom:30px;">ENKRIPSI MD5 dan SHA1</h3><hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-dark bg-light">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label" style="font-size: 10pt;">TEKS</label>
                                <textarea class="form-control" rows="4" name="teks" required><?= isset($_POST['teks']) ? $_POST['teks'] : ''; ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="enkripsi" value="Enkripsi" class="btn btn-primary btn-block">
                                <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-dark bg-light">
                    <div class="card-body">
                        <table cellspacing="0" cellpadding="5">
                            <tr>
                                <td>TEKS MD5 : <?php echo $teks_md5;?></td>
                            </tr>
                            <tr>
                                <td>TEKS SHA1 : <?php echo $teks_sha1;?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>