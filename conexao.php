<?php
$username="root";
$password="root";
$dbname="cabeleiro";
$localhost="localhost";
$port=8889;

try {
  $conexao = new PDO("mysql:host=$localhost;port=$port;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao feita com sucesso";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
