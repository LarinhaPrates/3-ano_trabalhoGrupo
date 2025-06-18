<?php
session_start();
include_once('../data/data.php');

// Define o intervalo do sorteio
$min = 1;
$max = 10000;

// Gera um número aleatório dentro do intervalo definido
$numeroSorteado = rand($min, $max);
$_SESSION['numeroSorteado'] = $numeroSorteado;
?>


