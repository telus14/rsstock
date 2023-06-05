<?php
session_start();
include_once 'connx.php';

$query_usuarios = "SELECT ID, numero, tipo, data, client_f FROM impmov ORDER BY id DESC";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

IF(($result_usuarios) and ($result_usuarios->rowCount() != 0)){
    
    // Aceitar csv ou texto 
    header('Content-Type: text/csv; charset=utf-8');

    // Nome arquivo
    header('Content-Disposition: attachment; filename=arquivo.csv');

    // Gravar no buffer
    $resultado = fopen("php://output", 'w');

    // Criar o cabeçalho do Excel - Usar a função mb_convert_encoding para converter carateres especiais
    $cabecalho = ['id', 'Numero', 'tipo', 'data', 'client_f'];

    // Escrever o cabeçalho no arquivo
    fputcsv($resultado, $cabecalho, ';');

    // Ler os registros retornado do banco de dados
    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){

        // Escrever o conteúdo no arquivo
        fputcsv($resultado, $row_usuario, ';');

    }

}else{
    $_SESSION['msg'] = "<p style='color: #f00;'>erro: nao existe</p>";
    header("notes.php");
}
?>