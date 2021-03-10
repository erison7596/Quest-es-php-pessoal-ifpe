<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Questao 10</title>
    <meta charset="utf-8">
</head>
<body>
 <form action="10questao.php" method="get">
     duelista 1 : <input type="text" name="username"> <!-formulario html para entrada dos nomes ->
     <br>
     duelista 2 : <input type="text" name="username2">
     <input type="submit">
     <br>
 </form>
     <?php
     $nome1 = $_GET["username"]; //pegando o nome e passando para $nome1
     $nome2 = $_GET["username2"];
     for($i = 0; $i < 5; $i++) {
         $array1[$i] = rand(0, 5000); //colocando os numeros aleatorios nos arrays
         $array2[$i] = rand(0, 5000);
     }
     $j1=0;
     $j2=0;
     for($i = 0; $i < 5; $i++) {
         if($array1[$i]>$array2[$i]){ // verifica qual é maior e adiciona 1 na variavel do jogador 1 ou 2
             $numero[$i]=$array1[$i];
           $ganhador[$i]= $nome1;
           $j1++;
         }else{
             $numero[$i]=$array2[$i];
             $ganhador[$i]= $nome2;
             $j2++;
         }
     }
     if($j1>$j2){ //verifica quem ganhou
         echo "<b>$nome1</b> foi o ganhador";
         echo "<br>";
     }else{
         echo "<b>$nome2</b> foi o ganhador";
         echo "<br>";
     } // quem ganhou cada batalha
     echo "<b>Vencedor de cada batalha: </b>";
     for($i = 0; $i < 5; $i++) {
         echo "<br>";
         echo "Nome: ";
         echo "<b>$ganhador[$i]</b>";
         echo " Numero sorteado: ";
         echo "<b>$numero[$i]</b>";
     }


     ?>

</body>
</html>