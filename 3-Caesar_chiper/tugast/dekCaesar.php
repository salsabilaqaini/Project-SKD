<?php
$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile,"r"); //buka file hasil enkripsi
$isi = fread($fp,filesize($nmfile));

for($i=0; $i<strlen($isi); $i++) {
    $kode[$i] = ord($isi[$i])-90; //rubah ASII ke desimal
    $b[$i] = ($kode[$i] - $key) % 26; //proses dekripsi Caesar
    $c[$i] = chr($b[$i]+90); //rubah desimal ke ASCII
}
echo "kalimat ciphertext : ";
for($i=0; $i<strlen($isi); $i++) {
    echo $isi[$i];
}
echo "<br>";
echo "hasil dekripsi = ";
for($i=0; $i<strlen($isi); $i++) {
    echo $c[$i];
}
echo "<br>";
?>