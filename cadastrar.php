<?php

$filename = "herois.txt";

if(!file_exists($filename)){
    $file = fopen($filename, 'w');
} else {
    $file = fopen($filename, 'a');
}

$text = "Nome do herói: " . $_POST['nome'] . " | Idade: " . $_POST['idade'] . " | Poder: " . $_POST['poder'] . PHP_EOL;

fwrite($file, $text);
fclose($file);
header('location: cadastroHerois.php');

?>