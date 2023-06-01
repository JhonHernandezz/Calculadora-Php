<?php

  header ("Content-Type:application/json");

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operador'];

    if(!is_numeric($num1) || !is_numeric($num2)){
      echo "Error, no sea loco mi perro";
    } else{

      switch ($operador) {
        case 'suma':
            $result = $num1 + $num2;
          break;
        case 'resta':
            $result = $num1 - $num2;
          break;
        case 'multiplicacion':
            $result = $num1 * $num2;
          break;
        case 'potenciacion':
            $result = pow($num1, $num2);
          break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: verifica los numeros ingresados";
            }
          break;
        default:
            $result = "Error: Operador inválido";
          break;
      }

      echo " El resultado de la " . $operador . " del numero " . $num1 . " y el numero " . $num2 . " es: " . $result;
    }
  
?>