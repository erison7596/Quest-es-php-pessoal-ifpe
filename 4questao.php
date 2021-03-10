<?php


for ($i=0; $i<20; $i++){
    $vetor[$i]=rand(1,200);//gerando numeros aleatorios
}

//esse laço fica responsavel por percorrer todos os elementos do vetor
for($cont1=0; $cont1<20; $cont1++){ //bolha
//dentro deste laço faremos as comparações necessarias
    for($cont2=0; $cont2<19;$cont2++){
        if($vetor[$cont2+1]<=$vetor[$cont2]){
        //é utilizada uma variavel auxiliar para a troca de valor
            $aux=$vetor[$cont2];
            $vetor[$cont2]=$vetor[$cont2+1];
            $vetor[$cont2+1]=$aux;
        }
    }
    //um vetor recebe os valores ordenados
    $lista[$cont1]=$aux;
}
$quant=0;
$med=0;
for ($i=0; $i<20; $i++){

    if($vetor[$i]%2==0){ //ver se é par
       $med+=$vetor[$i];
       $quant++;
    }
}
$medfinal=$med/$quant;
echo "<br>";
echo "A media é ";
echo $medfinal;
echo "<br>";
echo "<br>";
//mostra o vetor ordenado
echo "Numeros ordenados:";
echo "<br>";
for ($i=0; $i<20; $i++){
    echo "$vetor[$i]";
    echo "<br>";
}



?>
