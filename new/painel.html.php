<?php
session_start();
?>
<!DOCTYPE html>
<html>    
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Sistemax</title>
    <link rel="stylesheet" href="css/painel.css" />

    <h2 class="title">Bem Vindo!<br> <?php echo $_SESSION['usuario'];?></h2>
    <div>
    <body>
    <button href="notes.php" class="notesp">NOTEs</button>
    <button class="prints">PrinTEs</button>
    <button class="tablets">Tablets</button>
</div>
    <br>
    <br>
    <br>
    <h2><a href="logout.php">EXIT</a></h2>
    </body>
    </head>
</html>