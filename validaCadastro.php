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

echo "<table border= 3px><tr><td>Nome do Evento</td><td>Data do Evento</td><td>Horário de Inicio</td> <td>Horário de término</td> <td> Descrição do Evento</td> <td> Local do Evento </td> <td> Responsável pelo Evento</td></tr>";

while ($escrever = mysqli_fetch_array ($resultadoSelect)) {
    echo "</td><td>" . $escrever['ID'] . "</td><td>" . $escrever['nomeEvento'] . "</td><td>" . $escrever['dataEvento'] . "</td></tr>";
}

echo "</table>";

mysqli_close($conexao);
?>