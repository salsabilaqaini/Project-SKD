<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi Affine Cipher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="affine.php" method="GET">
        <h3 style="text-align: center;">Affine Cipher</h3><hr>
        <label>Plaintext :</label>
        <input type="text" name="kata"><br>
        <label>a :</label>
        <input type="number" name="key1"><br>
        <label>b :</label>
        <input type="number" name="key2"><br>
        <button type="submit" name="enkripsi">Enkripsi</button>
    </form>
    <p class="footer" style="padding: 5px; text-align:center; color:grey;">
    <small style="font-size: 10pt;">&copy; V3420068 SALSABILA QURROTUL AINI </small> </p>
</body>
</html>