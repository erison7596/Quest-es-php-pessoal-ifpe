<?php


for($i=0; $i<10; $i++){
    $a[$i]=rand();
    $b[$i]=rand();
    $c[$i]=rand();
}
$nada=0;
for($i=0; $i<10; $i++){
    if(($a[$i]*$a[$i])==(($b[$i]*$b[$i])+($c[$i]*$c[$i]))){ //a**2=b**2+c**2;
        echo "O ", $i, "formou um triangulo perfeito\n";
        $nada++;
    }
}
if ($nada==0){
    echo "nenhum triangulo foi perfeito";
}
?>