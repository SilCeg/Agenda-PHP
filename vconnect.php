<meta charset="utf-8">
<?php

$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "projeto agenda";
$conexao = mysqli_connect($host, $user, $pass, $base);

echo "<br>";
echo "Conexão ok";

mysqli_close($conexao);
?>