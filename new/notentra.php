<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli->error) {
    die("falhaxxx".  $mysqli->error);
}
date_default_timezone_set('America/Sao_Paulo');

if(isset($_POST['send'])){
    $numero = $_POST['numero'];
    $data = date('Y-m-d');
    $tipo = 1;
    $client = 'RS';
    $query = mysqli_query($mysqli, "INSERT INTO notmov(numero, tipo, data, client_f) VALUES('$numero', '$tipo', '$data', '$client')");
    $query = mysqli_query($mysqli, " SELECT * FROM note");
    $query = mysqli_query($mysqli, "UPDATE note SET estoque = 1 WHERE numero = $numero");
    $query = mysqli_query($mysqli, "UPDATE note SET client_f = 'RS' WHERE numero = $numero");
    if($query){
        echo 'ADCIONADO';
    } else {
        echo 'nao deu';
    }
}

header("location: entranot.php");
?>