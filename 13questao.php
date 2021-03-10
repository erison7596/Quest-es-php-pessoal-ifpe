<?php
$resultado = 0;
$vai = 1;
$volta = 50;
for($i = 1; $i <= 49; $i++){ //questão vai até o numero 50 e os numeros já começam em 1 e 50, se colocar ate 50 o volta ficaria em 0

    $resultado+=2**($vai/$volta);
    $vai++; //numero começa em 1 e vai até 50
    $volta--;//começa e, 50 e vai ate 1
}
echo $resultado;
?>