<?php
$tyr = $_GET["c"];
$balder = $_GET["d"];

if($tyr>$balder){
    echo "Tyr foi eleito";
}elseif ($tyr<$balder){
    echo "Balder foi eleito";
}else{
    echo "foi empate, sera decidido pela idade";
}

?>