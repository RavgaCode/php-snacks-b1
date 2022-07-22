<?php
// Dichiaro la variabile array vuoto
$numbersArray = [];
// Imposto il ciclo while per riempire l'array con numeri random non ripetuti fino a quando non contiene 15 numeri
while(count($numbersArray) < 15){
    $randomNumber = rand(1,99);
    if(!in_array($randomNumber, $numbersArray)){
        $numbersArray[] = $randomNumber;
    }
}

var_dump($numbersArray);
?>