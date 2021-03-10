<?php

for($i=0; $i<20; $i++){
    $sal[$i]=rand(40000,150000);
    $modelo[$i]=rand(1,2); //1 para p&b e 2 para rgb
    $quanttv[$i]=rand(1,50);//quantidade de tv vendidas
}
for($i=0; $i<20; $i++){
    $extra[$i]=0;
}

for($i=0; $i<20; $i++){
    //descobrir o extra de cada pessoa
    if($modelo[$i]==1){ //se for p&b
        if($quanttv[$i]<20){ //se vendeu menos de 20
            $extra[$i]=2000;
        }else{
            $extra[$i]=4000;
        }
    }else{
        if ($quanttv[$i]<10){
            $extra[$i]=5000;
        }else{
            $extra[$i]=10000;
        }

    }
    //descobrir o inss de cada pessoa
    $inss[$i]=$sal[$i]*0.08;

}
//descobrir o salario 1, tera um segundo pq pode ser que passe de 300.000
for($i=0; $i<20; $i++){
    $salario[$i]=$sal[$i]+$extra[$i]-$inss[$i];
}
//salario final
for($i=0; $i<20; $i++){
    if ($salario[$i]>=3000000){
        $salariofinal[$i]=$salario-($salario*0.05);
    }else{
        $salariofinal[$i]=$salario[$i];
    }
}

//salario bruto
for($i=0; $i<20; $i++){
    $sbruto[$i]=$sal[$i]+$extra[$i];
}

//escrever tudo
for($i=0; $i<20; $i++){
    echo "Numero de inscricao: ",$i,"|"," Salario bruto: ", $sbruto[$i], " | ", "Salario liquido: ", $salariofinal[$i];
    echo "<br>";
}



?>