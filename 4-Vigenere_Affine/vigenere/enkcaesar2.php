<?php

$kalimat = $_POST["kata"];
$kunci = $_POST["key"];
$plain_text = str_split($kalimat);
$n = count($plain_text);
$key = str_split($kunci);
$m = count($key);
$encrypted_text = '';
//$bataskode = 65;
if(ctype_upper($kalimat)){
    $bataskode = 65;
} else {
    $bataskode = 97;
}

for($i=0; $i<$n; $i++) {
    $encrypted_text .= chr(((ord($plain_text[$i])-$bataskode 
    +ord($key[$i%$m])-$bataskode)%26) +$bataskode);
} //digabungkan proses enkripsi

echo "Kalimat Asli : ";
for($i=0; $i<$n; $i++) {
    echo $kalimat[$i];
}
echo "<br>";
echo "Hasil Enkripsi : ";
$hsl = '';
    echo $encrypted_text;
    $hsl = $hsl . $encrypted_text;;

echo "<br>";
//simpan data di file
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);
fclose($fp);

?>