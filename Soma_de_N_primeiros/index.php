
<?php


Class VerificarPrimeiros{



    public function somaDosNprimeiros($n){

        $soma = 0;

        for($i = 1; $i <= $n; $i++) {
            $soma += $i;
        }

        return $soma;

    }
}


$somador = new VerificarPrimeiros();
echo $somador->somaDosNprimeiros(100);



?>