<?php



Class VerificarNumero{
 public $listaDeNumeros;


public function __construct($listaDeNumeros)
{
    $this->listaDeNumeros = $listaDeNumeros; 
}



public function VerificaParImpar(){
    foreach ($this->listaDeNumeros as $numero) {
        if ($numero % 2 == 0){
            echo $numero . " é Par<br>";
        } else {
            echo $numero . " é Ímpar<br>";
        }
    }
}
}


$numeros = [200,3]; 
$listaDeNumeros = new VerificarNumero($numeros); 
$listaDeNumeros->VerificaParImpar();


?>