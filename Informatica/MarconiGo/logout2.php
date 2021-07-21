<?php
// inizzializza la sessione
session_start();
 
// Annulla tutte le variabili di sessione
$_SESSION = array();
 
// Distruggi la sessione
session_destroy();
 
// Indirizza verso la pagina login
header("location: login.php");
exit;
?>
