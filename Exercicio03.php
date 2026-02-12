<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class = "container">
    <form action="" method="post">
        <label for="">Digite o valor</label><br>
        <input type="text" name = "pgto">Digite a forma de pagamento <br>
        <input type="text" name="valor" >valor da compra<br>
        <button type = "submit">Gerar valor</button>
    </form>
</div>


<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){


$pgto = $_POST["pgto"];
$valor = $_POST["valor"];

switch($pgto){

case 1:
    if($pgto == 1){

echo "Pagamento em dinheiro com 5% de desconto!";
echo "total a pagar: " . ($valor - ($valor*0.05)) . "<br>";
break;
    }
    case 2: 
        if($pgto == 2){

echo "Pagamento em cheque com 5% de juros. Favor informar data prevista";
echo "total a pagar: " . ($valor + ($valor * 0.05)) . "<br>";

        }break;
case 3: 
if($pgto == 3 && $valor >= 100){

echo "Favor informar numero de parcelas";
echo "Valor a pagar com juros: " . ($valor + ($valor * 0.07));

}else{

echo " sem possibilidade de parcelamento";
echo "Valor a pagar com juros: " . ($valor + ($valor * 0.07));
}
break;
default:
echo "forma de pagamento inválida";
}

}

?>

</body>
</html>