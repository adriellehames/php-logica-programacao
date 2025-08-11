<?php

Class TextoValidador{
public $frase; 

public function __construct($frase) {
    $this->frase = $frase;
}


public function contarCaracteres(){
    return strlen (trim($this->frase));
}

public function contarPalavras(){
$palavras = explode(" ", ($this->frase));
return count($palavras);
}
public function exibirResultadoPalavras(){
    echo "A quantidade de palavras do seu texto é:" . $this->contarPalavras(). "<br>";
}


public function exibirResultadoCaracteres(){
    echo "A quantidade de caracteres do seu texto é:" . $this->contarCaracteres(). "<br>"; 

}
}

$validar= new TextoValidador("paralelepipedo e um formato legal");
$validar-> exibirResultadoCaracteres();
$validar->exibirResultadoPalavras();






?>