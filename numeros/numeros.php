<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Numero</title>
</head>
<body>
  
  <?php
  require('validar_entero.php');
  
  if (isset($_POST["cantidad"])) {
    $cantidad = $_POST["cantidad"];
  }
  ?>

  <?php if (isset($cantidad)) { ?>
    <?php if (validarEntero($cantidad)) { ?>
      <h1>Ingrese los numeros a procesar</h1>
      <form action="numeros_procesar.php" method="post" accept-charset="utf-8">
        <?php for ($i=0; $i < $cantidad; $i++) { ?>
          <label for="number<?php echo $i; ?>">Numero <?php echo $i; ?></label><input type="text" 
          name="number<?php echo $i; ?>" value="" id="number<?php echo $i; ?>"> <br />
          
        <?php } ?>
        <p><input type="submit" value="Continue &rarr;"></p>
      </form>
    <?php } else { ?>
      <h1>Ingresa solo un numero por favor</h1>
      <form action="numeros.php" method="post" accept-charset="utf-8">
        <label for="cantidad">Cantidad</label><input type="text" name="cantidad" value="" id="cantidad">
  
        <p><input type="submit" value="Continue &rarr;"></p>
      </form>
    <?php } ?>
  <?php } else { ?>
    <h1>Ingresar cantidad de numeros</h1>
    <form action="numeros.php" method="post" accept-charset="utf-8">
      <label for="cantidad">Cantidad</label><input type="text" name="cantidad" value="" id="cantidad">
    
      <p><input type="submit" value="Continue &rarr;"></p>
    </form>
  <?php } ?>
  
</body>
</html>