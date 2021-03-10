<?php
$bragi = $_GET["a"];
$balder = $_GET["d"];

if($bragi>$balder){
    echo "Bragi foi eleito";
}elseif ($bragi<$balder){
    echo "Balder foi eleito";
}else{
    echo "foi empate, sera decidido pela idade";
}

?>