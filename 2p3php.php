<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Questao 2</title>
    <meta charset="utf-8">
</head>
<body>


<?php

$candidato[0] = $_GET["a"];
$candidato[1] = $_GET["b"];
$candidato[2] = $_GET["c"];
$candidato[3] = $_GET["d"];
$bragi=0;
$thor=0;
$tyr=0;
$balder=0;
for($i=0;$i<4;$i++){

    if($candidato[$i]>0){
        if($i==0){
            $bra=$i;
            $bragi=1;
        }elseif($i==1){
            $th=$i;
            $thor=1;
        }elseif($i==2){
            $ty=$i;
            $tyr=1;
        }elseif($i==3){
            $ba=$i;
            $balder=1;
        }
    }
}
        if ($bragi==1 && $thor==1){

            if($candidato[$bra]>$candidato[$th]){
                echo "Bragi foi eleito";
            }elseif ($candidato[$bra]<$candidato[$th]){
                echo "thor foi eleito";
            }elseif ($candidato[$bra]==$candidato[$th]){
                echo "deu empate";
            }


        }elseif ($bragi==1 && $tyr==1){
            if($candidato[$bra]>$candidato[$ty]){
                echo "Bragi foi eleito";
            }elseif ($candidato[$bra]<$candidato[$ty]){
                echo "tyr foi eleito";
            }elseif ($candidato[$bra]==$candidato[$ty]){
                echo "deu empate";
            }
        }elseif ($bragi==1 && $balder==1) {
            if($candidato[$bra]>$candidato[$ba]){
                echo "Bragi foi eleito";
            }elseif ($candidato[$bra]<$candidato[$ba]){
                echo "balder foi eleito";
            }elseif ($candidato[$bra]==$candidato[$ba]){
                echo "deu empate";
            }
        }elseif ($thor==1 && $tyr==1){
            if($candidato[$th]>$candidato[$ty]){
                echo "thor foi eleito";
            }elseif ($candidato[$th]<$candidato[$ty]){
                echo "tyr foi eleito";
            }elseif ($candidato[$th]==$candidato[$ty]){
                echo "deu empate";
            }
        }elseif ($thor==1 && $balder==1){
            if($candidato[$th]>$candidato[$ba]){
                echo "thor foi eleito";
            }elseif ($candidato[$th]<$candidato[$ba]){
                echo "balder foi eleito";
            }elseif ($candidato[$th]==$candidato[$ba]){
                echo "deu empate";
            }
        }elseif ($tyr==1 && $balder==1){
            if($candidato[$ty]>$candidato[$ba]){
                echo "tyr foi eleito";
            }elseif ($candidato[$ty]<$candidato[$ba]){
                echo "balder foi eleito";
            }elseif ($candidato[$ty]==$candidato[$ba]){
                echo "deu empate";
            }
        }

?>

</body>
</html>