<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body id="res">
    <div id="php">
<?php

$nome = $_POST['nome'];
$peso = floatval($_POST['peso']);
$altura = floatval($_POST['altura']);
$alturaquadrado = floatval($altura * $altura);

$imc = $peso / $alturaquadrado;


if ($imc < 18.5){

echo "Ola $nome, você está Abaixo do peso ideal. Seu IMC é de $imc";

} else{

if ($imc >= 18.5 && $imc < 25){

    echo "Ola $nome, você está no peso ideal. Seu IMC é de $imc";
} else {

if($imc >= 25 && $imc < 30 ){

    echo "Ola $nome, você está Acima do peso ideal. Seu IMC é de $imc";
} else {

if($imc > 30 ){
    echo "Ola $nome, você está Obeso. Seu IMC é de $imc";
}

}
}



}

?>
</div>


<div>
    <p>Abaixo de 18,5: Abaixo do peso</p>
    <p>Entre 18,5 e 25: Peso normal</p>
    <p>Entre 25 e 30: Acima do peso</p>
    <p>Acima de 30: obeso</p>
</div>



</body>
</html>