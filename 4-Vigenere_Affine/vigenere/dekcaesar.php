<?php

$kunci = $_POST["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile,"r"); //buka file hasil enkripsi
$isi = fread($fp,filesize($nmfile));

$plain_text = str_split($isi);
$n = count($plain_text);
$key = str_split($kunci);
$m = count($key);
$batas_atas = 65;
$batas_bawah = 97;

for ($i=0; $i<$n; $i++) {
    $dek[$i] = ord($plain_text[$i]);
    if ($dek[$i] >= 65 &&  $dek[$i] <= 90) {
        $dek_text[$i] =(($dek[$i]-(ord($key[$i % $m])))%26)+$batas_atas;
        if($dek_text[$i]<65){
            $dek_text[$i]+=26; //karena yang diminta batas atas 65
        }
    } else if ($dek[$i]>= 97 &&  $dek[$i] <= 122) {
         $dek_text[$i] =(($dek[$i]-(ord($key[$i % $m])))%26)+$batas_bawah;
         if($dek_text[$i]<97){
            $dek_text[$i]+=26;
        }
    }
}
echo "Kalimat Ciphertext : ";
for ($i=0; $i<strlen($isi); $i++){
    echo $isi[$i];
}
echo "<br>";
echo "Hasil Dekripsi = ";
for ($i=0; $i<strlen($isi); $i++){
    echo chr($dek_text[$i]);
}
echo "<br>"
?>