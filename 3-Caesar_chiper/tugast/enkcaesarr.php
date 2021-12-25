<?php

$kalimat = $_GET["kata"];
$key = $_GET["key"];
for ($i = 0; $i < strlen($kalimat); $i++) 
{
    $kode = ord($kalimat[$i]); //rubah ASCII ke desimal
    for($j=0;$j<$key;$j++){ //increment
        $kode++;
    }
    $c[$i] = chr($kode);
}
echo "kalimat ASLI : ";
for ($i = 0; $i < strlen($kalimat); $i++) 
{
    echo $kalimat[$i];
}
echo "<br>";
echo "Hasil enkripsi : ";
$hsl = '';
for ($i = 0; $i < strlen($kalimat); $i++) 
{
    echo $c[$i];
    $hsl = $hsl . $c[$i];
}
echo "<br>";
//simpan data di file
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);
fclose($fp);

?>