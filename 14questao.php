<?php
$vai=0;
$result=1;
$vem=100;
$serie=0;
$p=1;
for($i=0; $i<20; $i++){
    $p=1;
    if($i!=0) {

        for($j=1; $j<=$i; $j++){
            $p*=$j;
        }
        $serie+=($vem/$p);

    }
    $vem--;
    $vai++;

}
echo "A soma da serie e: ";
echo $serie;


?>