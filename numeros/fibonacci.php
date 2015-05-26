<?php
function fibonacci($valor) {
  if ($valor == 0 or $valor == 1) {
    return 1;
  } else {
    return fibonacci($valor - 1) + fibonacci($valor - 2);
  }
}
?>