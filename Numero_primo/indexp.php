 <?php

class NumPrimo
{
    public function verificaNumero($n)
    {
        if ($n <= 1) {
            echo "$n não é primo";
            return;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                echo "$n não é primo";
                return;
            }
        }

        echo "$n é primo";
    }
}

$num = 7; // número para testar
$teste = new NumPrimo();
$teste->verificaNumero($num);

?>
