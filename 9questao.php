<?php

for($i=0; $i<45; $i++){
    $quant[$i]=rand(1,3); //simulando quantas vezes apertou no botao
}
$valor=0;
for($i=0; $i<45; $i++){
    if($quant[$i]==1){ //se for boneco
        $valor+=350;
    }elseif ($quant[$i]==2){ //se for tumulo
        $valor+=120;
    }else{ //se for morcego
        $valor+=50;
    }
}
echo "O valor gasto durante a semana foi: ";
echo $valor;


?>