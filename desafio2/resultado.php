<?php

header("Content-type:text/html; charset=utf8");

session_start();

$acerto = 0;
$erro = 0;

if($_SESSION["Q1"] == "C"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q2"] == "A"){
    $acerto++;
}else{
    $acerto++;
}

if($_SESSION["Q3"] == "B"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q4"] == "C"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q5"] == "C"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q6"] == "C"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q7"] == "C"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q8"] == "E"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q9"] == "A"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q10"] == "D"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q11"] == "E"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q12"] == "C"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q13"] == "D"){
    $acerto++;
}else{
    $erro++;
}

if($_SESSION["Q14"] == "D"){
    $acerto++;
}else{
    $erro++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resultado.CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova-Resultado Final</title>
</head>
<body>
    
  <p> <?php echo "O numero de acertos foi de {$acerto} "; ?> </p> <br>
  <p> <?php echo "O numero de erros foi de {$erro} "; ?> </p> <br>
  <p> <?php echo " O usuario tirou {$acerto} valendo 14 pontos"; ?> </p> <br>

</body>
</html>