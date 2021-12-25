<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>FORM UNTUK ENKRIPSI</title>
</head>

<body>
    <div class="card border-secondary" style="margin-left:550px; margin-top:100px; width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Enkripsi</h5>
            <form action="enkcaesarr.php" method="GET">
                <div class="mb-3">
                    <label class="form-label">Plaintext :</label>
                    <textarea class="form-control" rows="3" name="kata"></textarea>
                </div>
                <div class="mb-3 col-sm">
                    <label class="form-label">Key</label>
                    <input type="text" class="form-control" name="key" maxlength="5">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-secondary">Ulangi</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>