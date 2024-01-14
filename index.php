<?php

// Traccia 1
$users = [
    ['name' => 'Keri', 'surname' => 'Varga', 'gender' => 'M'],
    ['name' => 'Linda', 'surname' => 'Ardeu', 'gender' => 'F'],
    ['name' => 'Fineas', 'surname' => 'Caleb', 'gender' => 'M']
];

foreach($users as $elemento){
    if($elemento['gender']== 'M'){
echo "Welcome Mr." . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
    } elseif($elemento['gender']== 'F'){
echo "Welcome Mrs" . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
    }
}

foreach($users as $elemento){
switch($elemento['gender']){
    case 'M':
        echo "Welcome Mr." . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
        break;
    case 'F':
        echo "Welcome Mrs" . " " . $elemento['name'] . " " . $elemento['surname'] . "\n";
        break;
}}


// Tracia 2
$elencoNumeri=[2,5,8,11,14,55,68];
$somma = 0;
$numeri_pari = 0;

foreach ($elencoNumeri as $elemento){
    if ($elemento % 2 == 0){
        $somma += $elemento;
        $numeri_pari++;
    }
}
$media = $somma / $numeri_pari;
echo "Sono presenti nell'array" . " " . $numeri_pari . " " . "numeri pari" . ". \n" . "La media dei numeri pari è" . " " . $media . ".";




// Tracia 3
for ($k = 1; $k <= 100; $k++) {
    if ($k % 3 == 0 && $k % 5 == 0) {
        echo $k . " " . "=" . " " . "HACKADEMY \n";
    } elseif ($k % 3 == 0) {
        echo $k . " " . "=" . " " . "PHP \n";
    } elseif ($k % 5 == 0) {
        echo $k . " " . "=" . " " . "JAVASCRIPT \n";
    } else {
        echo $k . " " . "=" . " " . " \n";
    }
}





// Tracia 4
$temperatura =5;
if ($temperatura < 15) {
    echo "Fuoria" . " " . "fa" . " " . "fredo";
}elseif ($temperatura < 25 ) {
    echo "Fuoria" ." ". "fa" ." " . "caldo";
}elseif ($temperatura > 30 || $temperatura>=25) {
    echo "Fuoria" ." " . "fa" . " " . "molto caldo";
}




// Tracia 5
$temperature = ["Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9,];
foreach ($temperature as $key => $value) {
    if ($value < 15) {
        echo "A" . " " . $key . " " . "fa" ." " . "freddo" . " " . "perche fa" . " " . $value . "°" . "\n";
    } elseif ($value <= 25) {
        echo "A" . " " . $key . " " . "fa" ." " . " caldo" . " " . "perche fa" . " " . $value . "°" . "\n";
    } elseif ($value >= 30) {
        echo "A" . " " . $key . " " . "fa" ." " . "molto caldo" . " " . "perche fa" . " " . $value . "°" . "\n";
    }
}




// Tracia Extra
$list = [];

for ($i = 0; $i < 4; $i++) {

    $list[$i] = [];
    for ($j = 0; $j < 5; $j++) {
        $list[$i][$j] = rand(0, 100);
    }
};
var_dump($list);
