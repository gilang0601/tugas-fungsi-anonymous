<?php


echo " tinggi andi :";
$andi = trim(fgets(STDIN));

echo " tinggi budi : ";
$budi =trim(fgets(STDIN));
echo "\n";

$selisih = $andi - $budi;

$percakapan = function($say="halo semua") use ($andi,$budi,$selisih) {

    echo "$say\n";
    echo "\n";
    echo "perkenalkan nama saya andi \n";
    echo "\n";
    echo "dan ini adik saya budi \n";
    echo "\n";
    echo "disini kami ingin mengukur selisih tinggi kami\n";
    echo "\n";
    echo "setelah saya ukur dengan meteran,selisih tinggi kami adalah :".$selisih." cm";
};

echo $percakapan();

?>