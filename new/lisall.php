<?php
include('protect.php');
?>
<!DOCTYPE html>
<html>    
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Sistemax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tablets.css" />
</head>
</html>
<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli->error) {
    die("falhaxxx".  $mysqli->error);
}
?>
  <div class="menu">
    <h2><a href="all.php">Voltar</a><br></h2>
    </div>
<div class="lis">
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Modelo?" type="text">
        <button type="submit">Qual</button>
        <table width="500px" border="2">
        <tr>
            <th>Num</th>
            <th>Modelo</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM allio 
                WHERE modelo LIKE '%$pesquisa%' 
                AND estoque = 1";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Produto não consta em estoque...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['numero'];?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                    </tr>
                    <?php
    
                }
            }
            ?>
             <?php
        } ?>
    </div>
    
    
    
  