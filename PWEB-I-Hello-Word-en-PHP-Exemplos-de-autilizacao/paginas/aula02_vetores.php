<?php

$notas = [10, 9, 8, 7, 8];

for( $i = 0; $i <= count($notas); $i++){
  echo $notas[$i] . "<br>";
}

$nomes = ["Fernanda"=>15, "Maria"=>19, "João"=>17, "Pedro"=>15, "Marcos"=>13];

foreach($nomes as $key => $valor){
  echo "Nome: " . $key . " - Idade: " . $valor . "<br>";
}




?>