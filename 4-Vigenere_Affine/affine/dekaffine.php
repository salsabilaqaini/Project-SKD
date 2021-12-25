<?php
$kunci1 = $_GET["key1"]; 
$kunci2 = $_GET["key2"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile,"r"); //buka file hasil enkripsi
$isi = fread($fp,filesize($nmfile));

if(ctype_upper($isi)){
    $bataskode = 65;
} else {
    $bataskode = 97;
}

$a_inv = 0;
$flag = 0;
for ($i = 0; $i <26; $i++){
    $flag = ($kunci1*$i)%26;
    if ($flag == 1) {
        $a_inv = $i;
    }
}
for ($i = 0; $i < strlen($isi); $i++) {
    $kode[$i]=ord($isi[$i]);  
    $b[$i]=((($a_inv * (($kode[$i]+$bataskode - $kunci2)) % 26)) + $bataskode);   //proses dekripsi
    $c[$i]=chr($b[$i]);
}
echo "Kalimat Ciphertext : ";
for ($i = 0; $i < strlen($isi); $i++) {
    echo $isi[$i];
}
echo "<br>";
echo "Hasil Dekripsi : ";

for ($i = 0; $i < strlen($isi); $i++) {
    echo $c[$i];
}
echo "<br>";

?>