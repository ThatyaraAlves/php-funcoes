<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <h1>Tabuada:</h1>
<?php

function tabuada($numero) {
    $cont = 1;
    while($cont < 11){
        echo "<p>{$numero} x {$cont} = ".$numero * $cont."</p>";
        $cont++;
    }
  }
  echo tabuada(3);

  function inverteArray($array){
    $inversao = array_reverse($array);
    return $inversao;

  }
  $arrayTeste = ["Pickwick Papers", "A Tale of Two Cities", "David Copperfield", "Oliver Twist"];
  $arrayInvertido = inverteArray($arrayTeste);
  
  echo "<h2>Array Original: </h2>";
  foreach($arrayTeste as $livro){
    echo "<p>{$livro}</p>";
  }
  echo "<h2>Array Invertido: </h2>";
  
  foreach($arrayInvertido as $livro){
    echo "<p>{$livro}</p>";
  }

  function cpf($numero){
    $length = mb_strlen($numero);
    if($length < 11){
        $diferenca = 11 - $length;
        $numero1 = str_repeat( "0", $diferenca);
        $numero2 = $numero1.$numero;
        $numero = $numero2;
    }
    $grupo1 = mb_substr($numero, 0, 3).".";
    $grupo2 = mb_substr($numero, 3, 3).".";
    $grupo3 = mb_substr($numero, 6, 3)."-";
    $grupo4 = mb_substr($numero, 9, $length);

    $cpf = $grupo1.$grupo2.$grupo3.$grupo4;
    return $cpf;
    }
    echo "<h2>CPF: </h2>";
    echo cpf("12345678913");

    function conversaoTemp($temperatura){
        $c = ($temperatura-32)/1.8;
        $celsius = round($c, 2);
        return "<p>A temperatura {$temperatura}° F em graus celsius é {$celsius}° C</p>";

    }
      echo "<h2>Conversão: </h2>";  
      echo conversaoTemp(90);
      echo conversaoTemp(77);
      echo conversaoTemp(52);
      echo conversaoTemp(12);

      function buscaTexto($texto, $busca){
        $teste;
        $textoArray = explode(" ",$texto);
        foreach($textoArray as $palavras){
              if(in_array($palavras, $busca)){
                 $palavras = "<span style=\"color: red;\">{$palavras}</span>";
                 
            }
            echo "{$palavras} ";
               
        }
          
      }
      $arrayTeste = ['aranha','abelhas','joaninha','besouros', 'formigas'];
      $texto = "Estamos na época dos insetos, vemos varias abelhas e cigarras por ai... besouros e formigas também.";
      echo "<h2>Buscar texto: </h2>"; 
      echo buscaTexto($texto, $arrayTeste);

      echo "<h2>Soma valores de um array: </h2>"; 
      function soma($array){
         $soma = 0;
         foreach($array as $numero){
            $soma = $soma + $numero;
         }
         return $soma;
      }
      $arrayInteiros = [1,2,3,55,4];
      echo soma($arrayInteiros);

?>




</body>
</html>