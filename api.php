<?php

    if (isset($_POST['calcular'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operator = $_POST['operador'];

      switch ($operator) {
          case 'suma':
              $result = $num1 + $num2;
              break;
          case 'resta':
              $result = $num1 - $num2;
              break;
          case 'multiplicacion':
              $result = $num1 * $num2;
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

      echo " El resultado de la " . $operator . " del numero " . $num1 . " y el numero " . $num2 . " es: " . $result;
  }
?>