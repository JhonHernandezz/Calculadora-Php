<?php
    header("Content-Type:application/json");

    if (isset($_POST['submit'])) {
        if (isset($_POST['boton'])) {
          $seleccionados = $_POST['boton'];
          echo "<h2>Botones seleccionados:</h2>";
          echo "<ul>";
          foreach ($seleccionados as $seleccionado) {
            echo "<li>$seleccionado</li>";
          }
          echo "</ul>";
        } else {
          echo "<h2>No se ha seleccionado ningún botón.</h2>";
        }
    }
?>