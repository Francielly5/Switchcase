<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class = "container"></div>
<form action="" method="post">
<label for="">Imprima um valor de 1 a 5:</label>
<input type="text" name = "num">  Digite o valor aqui
<button type = "submit"> Gerar resposta</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){


$num = $_POST ["num"];




switch ($num){

case 1:
    echo "numero um / number one";
    break;
case 2:
    echo "numero dois / number two";
    break;
    case 3:
        echo "numero tres / nummber three";
        case 4:
            echo "numero quatro / number four";
            case 5:
                echo "numero cinco / number five";
default:
echo "valor invalido";


}




}


?>


</body>
</html>