<?php
include('protect.php');
include_once 'connx.php'
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
    <h1 class="title"><b>All In Ones</b><br> </h1>
    
    <div class="div1">
    <form action="allmove.php" method="POST">
        <label>ENTRADA</label><br>
    <input id="ent" name="numero" type="number" placeholder="Num All"><br>
   <button name=send type="submit" >Send</button>
</div>     
</form>
<script>
       $("#ent").focus();
    </script>
<div class="menu">
<h3><a href="all.php">Voltar</a></h3>
</div>