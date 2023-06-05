<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'login';
$port = '3306';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  //echo "Conectado a $dbname em $host com sucesso.";
} catch (PDOException $pe) {
  die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
?>