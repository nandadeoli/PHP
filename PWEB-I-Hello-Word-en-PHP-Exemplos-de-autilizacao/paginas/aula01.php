<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <?php

     $nome = "Fernanda";
     $idade = "19";

     $anoA = 2024;
     $anoN = 2005;
     $idadeA = $anoA - $anoN;

    //contatenação
     echo "Olá mundo! ". $nome . " tem " . $idade . " anos." . "<br>";

     echo "Minha idade atual é " . $idadeA . " anos." . "<br>";


    if($idade >= 18){
      echo $nome . " é maior de idade." . "<br>";
    }else{
      echo $nome . " é menor de idade." . "<br>";
    }

    echo "<br>" .  "Laço de repetição: While " . "<br>";
    $num = 0;
      while ($num <= 10){
          echo "$num ";
          $num++;
     }

    echo  "<br>" . "Laço de repetição: Do While " . "<br>";
    $nume = 0;
     do {
         echo "$nume  ";
         $nume++;
     } while ($nume != 10);

    echo "<br>" . "Laço de repetição: For - " . "<br>";
    for ($num = 10; $num >= 0; $num--) {
     echo "$num " ;

     }

    echo "<br>" . "Datas com a função Date . "<br>";

    $hoje = date('d F Y');
    echo $hoje;

    echo date("d/m/Y");

    ?>

</html>