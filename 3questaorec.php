<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Questao 3</title>
    <meta charset="utf-8">
</head>
<body>
<form action="3questaorec.php" method="get">
    A : <input type="text" name="a"> <!-formulario html para entrada dos nomes ->
    <br>
    B : <input type="text" name="b">
    <br>
    C : <input type="text" name="c">
    <input type="submit">
    <br>
</form>
<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$delta=($b*$b)-(4*$a*$c);
$raiz=sqrt($delta);
if($a===0) {
    echo "a não pode ser igual a 0";
} else{

        if ($delta<0) {
            echo "Não possui raizes";
        } else{
            $x1=(-$b+$raiz)/(2*$a);
            $x2=(-$b-$raiz)/(2*$a);
            echo "X1: ";
            echo $x1;
            echo "<br>";
            echo "X2: ";
            echo $x2;
        }
    }


?>

</body>
</html>