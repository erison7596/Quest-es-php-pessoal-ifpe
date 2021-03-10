<?php
$a = 1;
$result = 0;

for($i = 1; $i <= 10; $i++){ //questão foi pedida até o numero 10
    if($a % 2 == 0) { // se for par o valor sera subtraido
        $result -= $a / ($a * $a); //sera o numero dividido pelo quadrado do mesmo
    }else{ //se for impar sera adicionado
        $result+=$a / ($a * $a);
    }
    $a++;
}
echo $result;

?>