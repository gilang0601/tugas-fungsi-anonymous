<?php
echo "nama : ";
$nama = trim(fgets(STDIN));

echo "asal : ";
$asal = trim(fgets(STDIN));

function nama() {

    global $nama;
    global $asal;
    echo "perkenalkan nama saya :".$nama."\n";
    echo "saya tinggal di :".$asal."\n";
}
$salam = function () {
    echo "hai semua\n";
};
echo $salam().nama();





?>