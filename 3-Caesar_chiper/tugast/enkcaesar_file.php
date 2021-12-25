<?php
    $file_upload = $_FILES["file_upload"];
    $key = $_POST["key"];
    move_uploaded_file($file_upload['tmp_name'],'./uploaded_file.txt');
    $kalimat = file_get_contents('./uploaded_file.txt');

    for($i=0; $i<strlen($kalimat); $i++){
        $kode[$i] = ord($kalimat[$i])-65;
        $b[$i] = ($kode[$i] + $key) % 26;
        $c[$i] = chr($b[$i]+65);   
    }

    echo "<b>kalimat ASLI : </b><br>";
    for($i=0; $i<strlen($kalimat); $i++){
        echo $kalimat[$i];
    }
    echo "<br><br>";
    echo "<b>hasil enkripsi = </b><br>";
    $hsl = '';
    for($i=0; $i<strlen($kalimat); $i++){
        echo $c[$i];
        $hsl = $hsl . $c[$i];
    }
    echo "<br>";
    //simpan data di file
    $fp = fopen("hasil_enkripsi.txt","w");
    fputs($fp, $hsl);
    fclose($fp);
?>
<br><br>
<b><a href="hasil_enkripsi.txt">Download File Here</a></b>