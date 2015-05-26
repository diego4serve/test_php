<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Resultado</title>
</head>
<body>
  <h1>Resultado</h1>
  <?php
  $fecha1 = new DateTime($_POST['fecha1']);
  $fecha2 = new DateTime($_POST['fecha2']);
  $interval = $fecha1->diff($fecha2);
  echo "Diferencia " . $interval->y . " años, " . $interval->m." meses, ".$interval->d." dias "; 
  ?>
</body>
</html>
