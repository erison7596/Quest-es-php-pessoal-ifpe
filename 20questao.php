<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Questao 10</title>
    <meta charset="utf-8">
</head>
<body>
<form action="20questao.php" method="get">
    Primeiro nome : <input type="text" name="n1"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo1" value="masc">Masculino
    <input type="radio" name="sexo1" value="fem">Feminino<br>

    Segundo nome : <input type="text" name="n2"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo2" value="masc">Masculino
    <input type="radio" name="sexo2" value="fem">Feminino<br>

    Terceiro nome :  <input type="text" name="n3"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo3" value="masc">Masculino
    <input type="radio" name="sexo3" value="fem">Feminino<br>

    Quarto nome : <input type="text" name="n4"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo4" value="masc">Masculino
    <input type="radio" name="sexo4" value="fem">Feminino<br>

    Quinto nome : <input type="text" name="n5"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo5" value="masc">Masculino
    <input type="radio" name="sexo5" value="fem">Feminino<br>

    Sexto nome : <input type="text" name="n6"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo6" value="masc">Masculino
    <input type="radio" name="sexo6" value="fem">Feminino<br>

    Setimo nome : <input type="text" name="n7"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo7" value="masc">Masculino
    <input type="radio" name="sexo7" value="fem">Feminino<br>

    Oitavo nome : <input type="text" name="n8"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo8" value="masc">Masculino
    <input type="radio" name="sexo8" value="fem">Feminino<br>

    Nono nome : <input type="text" name="n9"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo9" value="masc">Masculino
    <input type="radio" name="sexo9" value="fem">Feminino<br>

    Decimo nome : <input type="text" name="n10"> <!-formulario html para entrada dos nomes ->
    <input type="radio" name="sexo10" value="masc">Masculino
    <input type="radio" name="sexo10" value="fem">Feminino<br>

    <input type="submit">
    <br>
</form>
<?php
$n[0] = $_GET["n1"]; //passo o nome digitado para dentro do array
$n[1] = $_GET["n2"];
$n[2] = $_GET["n3"];
$n[3] = $_GET["n4"];
$n[4] = $_GET["n5"];
$n[5] = $_GET["n6"];
$n[6] = $_GET["n7"];
$n[7] = $_GET["n8"];
$n[8] = $_GET["n9"];
$n[9] = $_GET["n10"];
$sexo[0] = $_GET["sexo1"]; //passo o sexo para o array
$sexo[1] = $_GET["sexo2"];
$sexo[2] = $_GET["sexo3"];
$sexo[3] = $_GET["sexo4"];
$sexo[4] = $_GET["sexo5"];
$sexo[5] = $_GET["sexo6"];
$sexo[6] = $_GET["sexo7"];
$sexo[7] = $_GET["sexo8"];
$sexo[8] = $_GET["sexo9"];
$sexo[9] = $_GET["sexo10"];

for($i = 0; $i < 10; $i++){
    if ($sexo[$i]=="masc"){ //se for homem
        $arquivo1 = fopen('homem.txt','a'); // crio/abro o arquivo dos aprovados, esse "a" no fim é que ele coloca o ponteiro no fim do arquivo
        //verificamos se foi criado
        if ($arquivo1 == false) die('Não foi possível criar o arquivo.');
        $name="$n[$i] \n"; //passa on nome para $name ja pulando uma linha
        fwrite($arquivo1, $name); //escreve no arquivo

    }else{
        $arquivo2 = fopen('mulher.txt','a'); // crio/abro o arquivo dos aprovados, esse "a" no fim é que ele coloca o ponteiro no fim do arquivo
        //verificamos se foi criado
        if ($arquivo2 == false) die('Não foi possível criar o arquivo.');
        $name="$n[$i] \n";
        fwrite($arquivo2, $name);
    }
}

fclose($arquivo1);
fclose($arquivo2);





?>

</body>
</html>