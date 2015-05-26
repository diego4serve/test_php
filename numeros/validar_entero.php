<?php
function validarEntero($valor){
   if(filter_var($valor, FILTER_VALIDATE_INT) === FALSE){
      return false;
   }else{
      return true;
   }
}
?>