<?php
function factorial($valor) {
  if ($valor == 0) {
    return 1;
  } else {
    return $valor * factorial($valor - 1);
  }
}
?>