<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Resultados</title>
</head>
<body>
  <h3>Numeros Ingresados</h3>
  <?php
  require('validar_entero.php');
  require('fibonacci.php');
  require('factorial.php');
  $error = false;
  $cantidad = count($_POST);
  ?>

  <?php foreach($_POST as $i => $value) { ?>
    <h3><?php echo $i."= ".$value; ?></h3>
    <?php
    if (validarEntero($value)) {
      $error = false;
    } else {
      $error = true;
    }
    ?>
  <?php } ?>
  
  <?php if($error == true) { ?>
    <h1>Ingrese solo numeros, todos los campos son requeridos</h1>
      <form action="numeros_procesar.php" method="post" accept-charset="utf-8">
        <?php for ($i=0; $i < $cantidad; $i++) { ?>
          <label for="number<?php echo $i; ?>">Numero <?php echo $i; ?></label><input type="text" 
          name="number<?php echo $i; ?>" value="" id="number<?php echo $i; ?>"> <br />
        <?php } ?>
        <p><input type="submit" value="Continue &rarr;"></p>
      </form>
  <?php } else { ?>
    <?php
    $total = 0;
    $mayor = max($_POST);
    foreach ($_POST as $i) { 
      $total = $total + $i;
    }
    
    echo "Sumatoria de los numeros: ".$total."<br />";
    echo "Mayor valor: ".$mayor."<br />";
    echo "Menor valor: ".min($_POST)."<br /><br />";
    echo "Fibonacci:"."<br />";
    foreach ($_POST as $value) {
      echo "Serie Fibonacci de ".$value."=".fibonacci($value)."<br />";
      for($i=1;$i<=$value;$i++) 
      { 
        if($i<=($value-1)) 
          echo fibonacci($i).','; 
        else 
          echo fibonacci($i); 
      }
      echo "<br />";
    }
    echo "Factorial del numero mayot (".$mayor.")= ".factorial($mayor);
    
    ?>
  <?php } ?>
</body>
</html>