<?php
/* Credenziali del database. Supponendo che tu stia eseguendo MySQL
server con impostazione predefinita (utente 'root' senza password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'emanuele');
define('DB_PASSWORD', 'Romanista_66');
define('DB_NAME', 'MarconiGo');
 
/* Tenta di connettersi al database MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Verificare la connessione
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>