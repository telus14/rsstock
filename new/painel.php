<?php

include('protect.php');

?>
<!DOCTYPE html>
<html>    
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>RS MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/painel.css" />
    <div class="container">
                    <div class="bolhas">
                        <span style="--i:11"></span>
                        <span style="--i:17"></span>
                        <span style="--i:25"></span>
                        <span style="--i:14"></span>
                        <span style="--i:9"></span>
                        <span style="--i:2"></span> 
                        <span style="--i:28"></span>
                        <span style="--i:16"></span>
                        <span style="--i:22"></span> 
                        <span style="--i:4"></span>
                        <span style="--i:13"></span>
                        <span style="--i:27"></span>
                        <span style="--i:19"></span>
                        <span style="--i:15"></span>
                        <span style="--i:24"></span>
                        <span style="--i:12"></span>
                        <span style="--i:26"></span>
                        <span style="--i:32"></span> 
                        <span style="--i:5"></span>
                        <span style="--i:21"></span>
                        <span style="--i:14"></span> 
                        <span style="--i:7"></span>
                        <span style="--i:23"></span>
                        <span style="--i:8"></span>
                        <span style="--i:27"></span> 
                        <span style="--i:4"></span>
                        <span style="--i:32"></span>
                        <span style="--i:11"></span> 
                        <span style="--i:23"></span>
                        <span style="--i:35"></span>
                        <span style="--i:18"></span>
                        <span style="--i:3"></span> 
                        <span style="--i:16"></span>
                        <span style="--i:29"></span>
                        <span style="--i:20"></span> 
                        <span style="--i:10"></span>
                        <span style="--i:34"></span> 
                </div>
    <body>
        <div class="title">
    <h2>Seja Bem Vindo!<br> <?php echo " > Agente - " . $_SESSION['usuario'];?></h2>
        </div>
    
        <div class="b1">
        <input type="submit" value="NotesS" 
        onclick="location.href='notes.php'">
        </div>
    
        <div class="b2">
        <input type="submit" value="PrintesS"
        onclick="location.href='imp.php'">
        </div>
    
       <div class="b3">
       <input type="submit" value="TabletsS"
        onclick="location.href='tablets.php'">
       </div>   
        <div class="b4">
        <input type="submit" value="ALL In Ones"
        onclick="location.href='all.php'">
        </div>
    <div class="exi">
    <h2><a href="logout.php">Sair</a></h2>
    </div>
    </body>
    </head>
</html>