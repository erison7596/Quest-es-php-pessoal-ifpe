<?php
$thor = $_GET["b"];
$balder = $_GET["d"];

if($thor>$balder){
    echo "Thor foi eleito";
}elseif ($thor<$balder){
    echo "Balder foi eleito";
}else{
    echo "foi empate, sera decidido pela idade";
}

?>