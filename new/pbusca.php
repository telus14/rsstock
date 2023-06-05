<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html>    
<head>
    <body>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <title>Sistemxx</title>
    <link rel="stylesheet" href="css/tablets.css" />
    </div>
    <div class="title">
    <h2><a href="painel.php">Menu</a><br></h2>
    </div>
    <form method="POST" action="">
			<div class="menupesquisa"> 
                <label>Cadê? </label>
			<input1 type="text" name="numero" placeholder="Numero do Produto"><br><br>
			</div>
            <div class="encontrar">
            <input1 name="SendPesqUser" type="submit" value="Encontrar">
		
            </div>

        </form><br><br>
		<div class="resultbusca">
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM imp WHERE numero = '$numero'";
			$resultado_usuario = mysqli_query($conexao, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "Numero: " . $row_usuario['numero'] . "<br>";
				echo "Mod Impressora: " . $row_usuario['modelo'] . "<br>";
				echo "Estoque: " . $row_usuario['estoque'] . "<br>";	
			}
		}
		?>
        </div>
    

</head>
</body>
