<?php

$arquivo = fopen('aluno.txt','r'); //abre o arquivo que o professor mandou só para ler
if ($arquivo == false) die('Não foi possível abrir o arquivo.'); //verifica se foi possivel ler o arquivo, caso não, ele finaliza o programa

while (true) { //vai até o fim do arquivo
    $info = fscanf($arquivo, "%s %s %s %s %s %s %s %s %s %s %s");//isso foi para pegar palavras, casa %s pega uma parte, ex:. peter paker, o primeiro %s pega o peter e assim por diante, o segundo o paker
    if ($info==null) break;//se chegar no fim do arquivo ele finaliza
    list($ar[0], $ar[1], $ar[2], $ar[3], $ar[4], $ar[5], $ar[6], $ar[7], $ar[8], $ar[9], $ar[10]) = $info; // aqui to passando aqueles %s para cada variavel dessas, vejam que tem 11, mas o maximo que irao usar sao 8

    $j = 0;

    for ($i = 0; $i < 11; $i++) {
        if ($ar[$j] == "|") { //depois do | vai estar a primeira nota
            $num = $j; // salvei o | no $num
            $j++; //pulei, o proximo é a primeira nota
            $nn1 = $ar[$j]; //primeira nota salva no $nn1
            $j++;//pula primeira nota
            $j++;// caiu em um - ai pula de novo
            $nn2 = $ar[$j]; //salvei a segunda nota no $nn2
            break; //como já tenho ambas as notas, encerro o laço
        }
        $j++;
    }

    $total = ($nn1 + $nn2) / 2; //aqui pego a media da pessoa

    $cont = 0;
    if ($total >= 6) { //vejo se ele tem not para ser aprovado
        $arquivo2 = fopen('aprovados.txt','a'); // crio/abro o arquivo dos aprovados, esse "a" no fim é que ele coloca o ponteiro no fim do arquivo
        //verificamos se foi criado
        if ($arquivo2 == false) die('Não foi possível criar o arquivo.');
        for ($i = 0; $i < 11; $i++) {//lá em cima salvei onde estava a |, logo antes da barra esta o nome
            if ($cont == $num) { //verifica se o $cont é a |, //o cont começa em 0 logo pega a primeira palavra é um nome, la em baixo ele adiciona mais 1, logo aqui ira verificar se é a |, caso não for ele continua assim ate achar a barra, assim q achar encerra o laço
                break; //se for ele encerra o laço
            }
            $nome = $ar[$cont]; //passa para o $nome o nome do aluno
            $name="$nome "; //passo o nome para $name com um espaço pq ele pode ter mais de um nome
            fwrite($arquivo2, $name); //escrevo o nome no arquivo,
            //echo $name; //testar se estava funcionando

            $cont++;
        }
        $med="- $total\n"; //ele passa a media que esta la em cima para $med já pulando uma linha
        //echo $med ; //teste da media
        fwrite($arquivo2, $med); //escreve a media no arquivo de aprovados
        //echo "<br>";
    }

}
fclose($arquivo2); //fecha arquivo dos aprovados
fclose($arquivo); //fehca arquivo do professor
?>