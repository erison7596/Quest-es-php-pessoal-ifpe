<?php
$bragi = $_GET["a"];
$tyr = $_GET["c"];

if($bragi>$tyr){
    echo "Bragi foi eleito";
}elseif ($bragi<$tyr){
    echo "Tyr foi eleito";
}else{
    echo "foi empate, sera decidido pela idade";
}

?>