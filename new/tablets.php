<?php
include('protect.php');
include_once 'connx.php';
?>




<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>AlliOleo</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tablets.css" />
    <body>
    <h1 class="title"><b>__TabletsS__</b><br> </h1>
    <h3 class="esto"></h3>
    <div class="b1">
        <input type="submit" value="ENTRADA Tablet" 
        onclick="location.href='entratab.php'">
        </div>
    
    <div class="div2">
    <form action="tsaida.php" method="POST">
        <label>Saida</label><br>
    <input id="ext" name="numero" type="number" placeholder="Num Tablet"><br>
    <input name="cliente" type="text" value="<?php
    $sql = 'SELECT client_f FROM tmov ORDER BY id DESC LIMIT 1';
    $sql_result = $conn->prepare($sql);
    $sql_result->execute();
    $row_prod = $sql_result->fetch(PDO::FETCH_ASSOC);
    echo $row_prod['client_f'] ?>"><br>
   <button name=enviar type="submit" >Send</button>
    </form>
     </div>
     <script>
       $("#ext").focus();
    </script> 
<div class="div3">
    
<?php
    
    $query_testoque = "SELECT COUNT(id_tablet) AS thome FROM tablet WHERE estoque=1";
    $result_tablet = $conn->prepare($query_testoque);
    $result_tablet->execute();

    $row_produto = $result_tablet->fetch(PDO::FETCH_ASSOC);
    echo "Total Home:  " . $row_produto['thome'] . "<br>"
    
    ?>
    </div>
    <div class="div4">
    <h3><a href="listab.php">__Estoque__</a></h3>
    </div>

    </div>
<div class="exce">
<a href="tabexcell.php">Gerar Movimento!</a><br>
</div>

        <div class="menu">
        <h2><a href="painel.php">Menu</a></h2>
        </div>
        <?php
    define('HOST' , '127.0.0.1');
    define('USUARIO' , 'root');
    define('SENHA' , '');
    define('DB' , 'login');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('no cnt');
    ?>
    <form method="POST" action="">
			<div class="menupesquisa"> 
                <label>Cadê? </label>
			<input type="text" name="numero" placeholder="Numero do Produto"><br><br>
			</div>
            <div class="encontrar">
            <input name="SendPesqUser" type="submit" value="Encontrar">
		
            </div>

        </form><br><br>
		<div class="resultbusca">
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM tablet WHERE numero = '$numero'";
			$resultado_usuario = mysqli_query($conexao, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo " T-" . $row_usuario['numero'] . "<br>";
				echo "Mod Tablet: " . $row_usuario['modelo'] . "<br>";
				echo "Estoque: " . $row_usuario['estoque'] . "<br>";
                echo "Cliente: " . $row_usuario['client_f'];	
			}
		}
		?>
        </div>
</head>
</body>