<meta charset="utf-8">
<?php


$nomeEvento = $_POST['nomeEvento'];
$dataEvento = $_POST ['dataEvento'];
$horaInicio = $_POST ['horaInicio'];
$horaFim = $_POST ['horaFim'];
$descEvento = $_POST ['descEvento'];
$localEvento = $_POST ['localEvento'];
$respEvento = $_POST ['respEvento'];


$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "projeto agenda";
$conexao = mysqli_connect($host, $user, $pass, $base);


$resultadoInsert = mysqli_query ($conexao, "INSERT INTO eventos(nomeEvento, dataEvento, horaInicio, horaFim, descEvento,localEvento, respEvento) VALUES('$nomeEvento', $dataEvento, '$horaInicio', '$horaFim', '$descEvento', '$localEvento', '$respEvento')");

echo ("Cadastro realizado com sucesso!");

$resultadoSelect = mysqli_query($conexao, "SELECT * FROM eventos");

echo $resultadoSelect;




mysqli_close($conexao);
?>