<?php
$thor = $_GET["b"];
$tyr = $_GET["c"];

if($thor>$tyr){
    echo "Thor foi eleito";
}elseif ($thor<$tyr){
    echo "Tyr foi eleito";
}else{
    echo "foi empate, sera decidido pela idade";
}

?>