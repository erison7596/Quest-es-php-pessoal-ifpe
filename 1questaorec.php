<?php
$arquivo1 = fopen('nomes.txt','r'); // abri o arquivo para ler
//verificamos se ja tem esse arquivo
if ($arquivo1 == false) die('Não foi possível criar o arquivo.');
$i=0;
while(true){

    $vetor[$i]=fgets($arquivo1);

    if ($vetor[$i]==null) break;

    $i++;
}

fclose($arquivo1);



//esse laço fica responsavel por percorrer todos os elementos do vetor
for ($cont1 = 0; $cont1 <= $i; $cont1++) { //bolha
//dentro deste laço faremos as comparações necessarias
    for ($cont2 = 0; $cont2 < $i; $cont2++) {
        if ($vetor[$cont2 + 1] <= $vetor[$cont2]) {
            //é utilizada uma variavel auxiliar para a troca de valor
            $aux = $vetor[$cont2];
            $vetor[$cont2] = $vetor[$cont2 + 1];
            $vetor[$cont2 + 1] = $aux;
        }
    }
    //um vetor recebe os valores ordenados
    $lista[$cont1] = $aux;
}




$p = 1;
?>
    <!-- aqui vou criar a tabela -->
    <table border="2">
        <thead>
        <tr>
            <th>LISTA DE NOMES ORDENADOS</th>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Numero: </th>
            <th>Nome: </th>
        </tr>
        </thead>
        <tbody>

        <?php
        while ($p <= $i) {
            $ord = "$vetor[$p]\n";
            $partes = explode(' ', $vetor[$p]); //separa a string em partes

            $ult = array_pop($partes); // pega a ultima parte da string

            $pos = strpos($vetor[$p], $ult); //pega a posiçao que inicia a ultima palavra da string

            $parte = substr($vetor[$p], 0, $pos); //apaga a ultima parte da string com a poisição que peguei acima

            $ult_maius=strtoupper($ult); // coloca a ultima parte em maiusculo

            $teste=$parte." "."<span style='color:blue; font-weight: bold'>$ult_maius</span>\n"; //concatenar as strings e ja deixar a ultima em azul




            ?>

            <tr>
                <td><?php echo $p;?></td>
                <td><?php echo $teste;?></td>
            </tr>


            <?php





            $p++;
        }
        ?>

        </tbody>
    </table>
<?php





?>