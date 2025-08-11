<?php 

Class invertirString {

public function invertendoString($s) {
 $invertida = "";
  for($i = strlen($s) - 1; $i >= 0; $i--){
$caractere= $s[$i];
$invertida .= $caractere; 
 

  }
   return $invertida;
}
}

$dado = "patoca";
$inversor= new invertirString();
echo $inversor->invertendoString($dado);


?>