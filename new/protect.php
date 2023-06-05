<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['usuario'])) {
    die("Acess Negated! . <p><a href=\"index.php\">Log In</a></p>");
}
?>