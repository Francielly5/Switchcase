<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <form action="" method="post">
        <label for="">PLR</label>
        <input type="number" name ="faixa">Digite sua faixa salarial
        <input type="number" name="salario">Digite seu salario
        <button>Gerar resultado</button>
    </form>
</div>


</body>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$faixa = $_POST["faixa"];
$salario = $_POST["salario"];


switch($faixa){
    case 1:
if($salario <= 800 && $faixa == 1){

    echo "sua PLR é:" .  (500 + ($salario * 0.07));
    }
break;
case 2:
if ($salario >=800 && $salario <=1500 && $faixa = 2){

    echo "sua PLR é:" . ( 800 + ($salario * 0.10));
    }
    break;
    case 3:
    if ($salario >= 1500 && $salario <= 2300 && $faixa == 3){
    
        echo "sua PLR é:" . ( 1000 + ($salario * 0.12));
        }
        break;
        case 4:
if($salario >= 2300 && $salario <= 3500 && $faixa == 4){

echo "sua PLR é:" . ( 1200 + ($salario * 0.15));

}
case 5:
    if($salario >= 3500 && $faixa=5){
echo "sua plr é" . ( 1200);

    }
    default:
    echo "valor não encontrado";
}

}

?>

</html>