<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM UNTUK ENKRIPSI </title>
</head>

<body>
    <form action="enkcaesar_file.php" method="POST" enctype="multipart/form-data">
        Plainteks :
        <input type="file" name="file_upload"><br>
        Key :
        <input type="text" name="key" maxlength="5"><br>
        <input type="submit" value="kirim">
        <input type="reset" value="ulangi">
    </form>
</body>

</html>