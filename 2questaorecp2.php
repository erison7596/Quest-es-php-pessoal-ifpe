<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Questao 2 rec</title>
    <meta charset="utf-8">
</head>
<body>

<?php
$candidato[0] = $_GET["a"]; //pegando o nome e passando para $nome1
$candidato[1] = $_GET["b"];
$candidato[2] = $_GET["c"];
$candidato[3] = $_GET["d"];
$brancos = $_GET["e"];
$nulos = $_GET["f"];
$total= $candidato[0]+$candidato[1]+$candidato[2]+$candidato[3];
$total2= $brancos+$nulos;
$cont =0; // saber se tem algum com mais de 50%
$nome=10;
if($total2>$total){
    echo "A eleição não é valida";
}else{
    for($i=0;$i<4;$i++){
        if($candidato[$i]>($total/2)){
            $nome=$i;
            $cont++;
        }
    }
    if($nome==0){
        echo "Bragi foi eleito";
    }elseif ($nome==1){
        echo "Thor foi eleito";
    }elseif ($nome==2){
        echo "Tyr foi eleito";
    }elseif ($nome==3){
        echo "Balder foi eleito";
    }elseif ($nome==10){
        echo "Será necessário um novo turno";
        echo "<br>";
        $maior1=$candidato[0];
        $maior2=$candidato[1];
        for($i=1;$i<4;$i++){
            if($candidato[$i]>=$maior1){
                $maior2=$maior1;
                $maior1=$candidato[$i];
            }elseif($candidato[$i]>=$maior2){
                $maior2=$candidato[$i];
            }
        }
        $max=0; //para caso tenha algum igual ele nao pegar o segundo
        for($i=0;$i<4;$i++){

            if ($maior1==$candidato[$i]){
                if($max==0){
                    $cont2=$i;
                }
                $max++;
            }if ($maior2==$candidato[$i]){
                $cont3=$i;
            }
        }

        if (($cont2==0 && $cont3==1) || ($cont2==1 && $cont3==0)){
            echo("<script language=\"javascript\">"); //nao soube outra forma de abrir uma aba caso a condição fosse verdadeira
            echo("top.location.href = \"bragiethor.php\";");
            echo("</script>");
        }elseif (($cont2==0 && $cont3==2)||($cont2==2 && $cont3==0)){
            echo("<script language=\"javascript\">");
            echo("top.location.href = \"bragietyr.php\";");
            echo("</script>");
        }elseif (($cont2==0 && $cont3==3)||($cont2==3 && $cont3==0)) {
            echo("<script language=\"javascript\">");
            echo("top.location.href = \"bragiebalder.php\";");
            echo("</script>");
        }elseif (($cont2==1 && $cont3==2)||($cont2==2 && $cont3==1)){
            echo("<script language=\"javascript\">");
            echo("top.location.href = \"thoretyr.php\";");
            echo("</script>");
        }elseif (($cont2==1 && $cont3==3)||($cont2==3 && $cont3==1)){
            echo("<script language=\"javascript\">");
            echo("top.location.href = \"thorebalder.php\";");
            echo("</script>");
        }elseif (($cont2==2 && $cont3==3)||($cont2==3 && $cont3==2)){
            echo("<script language=\"javascript\">");
            echo("top.location.href = \"tyrebalder.php\";");
            echo("</script>");
        }



    }

}


?>

</body>
</html>
