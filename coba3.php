<?php
$minimal = 75;
$datanilai = [
    ["nama"=>"gilang", "nilai"=>90],
    ["nama"=>"amat", "nilai"=>67],
    ["nama"=>"fikri", "nilai"=>80],
    ["nama"=>"dani", "nilai"=>87],
    ["nama"=>"ulfa", "nilai"=>90],
    ["nama"=>"dewo", "nilai"=>78],
];

array_walk($datanilai, function($siswa) use ($minimal){
    echo "siswa : ". $siswa["nama"]."\n";
    echo "nilai : ". $siswa["nilai"]."\n";
    echo "status : ";
    if ($siswa["nilai"] >=$minimal) {
        echo "lulus\n\n";

    } else {
        echo "tidak lulus\n\n";
    }
});
?>