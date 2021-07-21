<?php
$hostname = "localhost";
$username = "root";
$password = "";

// Apertura della connessione con il server MySQL
$conn = mysqli_connect($hostname, $username, $password);
if (! $conn)
{
  die('Errore durante la connessione: ' . mysqli_connect_error());
}
echo "Connessione a MySQL effettuata con successo <BR>";

// Comando SQL - Creazione del database ospedale
$strSQL = "CREATE DATABASE MarconiGo;";
if (mysqli_query($conn, $strSQL))
{
  echo "Database demo creato correttamente\n";
}
else
{
  echo "Errore nella creazione del database MarconiGo: " . mysqli_error($conn);
}

// Selezione del database demo
$db1 = mysqli_select_db($conn, "MarconiGo");
if (! $db1)
{
  die('Accesso al database non riuscito: ' . mysqli_error($conn));
}
echo "Accesso al database effettuato con successo";

// Comando SQL - Creazione della tabella brands
$strSQL = "CREATE TABLE brands (";
$strSQL .= "brands_id INT NOT NULL,";
$strSQL .= "brands_title VARCHAR(30),";
$strSQL .= "PRIMARY KEY (brands_id));";

if (mysqli_query($conn, $strSQL))
{
  echo "Tabella brands creata correttamente";
}
else
{
  echo "Errore nella creazione della tabella brands: " . mysqli_error($conn);
}


// Comando SQL - Creazione della tabella categories
$strSQL = "CREATE TABLE categories(";
$strSQL .= "cat_id INT NOT NULL,";
$strSQL .= "cat_title VARCHAR(30),";
$strSQL .= "PRIMARY KEY (cat_id));";

if (mysqli_query($conn, $strSQL))
{
  echo "Tabella categories creata correttamente";
}
else
{
  echo "Errore nella creazione della tabella categories: " . mysqli_error($conn);
}





// Comando SQL - Creazione della tabella product
$strSQL = "CREATE TABLE product(";
$strSQL .= "product_id INT NOT NULL,";
$strSQL .= "cat_id INT NOT NULL,";
$strSQL .= "brands_id INT NOT NULL,";
$strSQL .= "product_title VARCHAR(30),";
$strSQL .= "product_price INT,";
$strSQL .= "product_qty INT,";
$strSQL .= "product_desc VARCHAR(30),";
$strSQL .= "FOREIGN KEY (cat_id) ";
$strSQL .= "REFERENCES categories (cat_id),";
$strSQL .= "FOREIGN KEY (brands_id) ";
$strSQL .= "REFERENCES brands (brands_id),";
$strSQL .= "PRIMARY KEY (product_id));";






if (mysqli_query($conn, $strSQL))
{
  echo "Tabella product creata correttamente";
}
else
{
  echo "Errore nella creazione della tabella product: " . mysqli_error($conn);
}



$strSQL = "CREATE TABLE users(";
$strSQL .= "id INT NOT NULL AUTO_INCREMENT,";   
$strSQL .= "username VARCHAR(50) NOT NULL UNIQUE,";  
$strSQL .= "password VARCHAR(255) NOT NULL,"; 
$strSQL .= "created_at DATETIME DEFAULT CURRENT_TIMESTAMP,"; 
$strSQL .= "PRIMARY KEY (id));";


if (mysqli_query($conn, $strSQL))
{
  echo "Tabella users creata correttamente";
}
else
{
  echo "Errore nella creazione della tabella users: " . mysqli_error($conn);
}

// Comando SQL - Creazione della tabella orders

$strSQL = "CREATE TABLE orders(";
$strSQL .= "order_id INT NOT NULL,";
$strSQL .= "product_id INT NOT NULL,";
$strSQL .= "id INT NOT NULL,";
$strSQL .= "qty INT,";
$strSQL .= "FOREIGN KEY (product_id) ";
$strSQL .= "REFERENCES product (product_id),";
$strSQL .= "FOREIGN KEY (id) ";
$strSQL .= "REFERENCES users (id),";
$strSQL .= "PRIMARY KEY (order_id));";


if (mysqli_query($conn, $strSQL))
{
  echo "Tabella orders creata correttamente";
}
else
{
  echo "Errore nella creazione della tabella orders: " . mysqli_error($conn);
}

$strSQL = "CREATE TABLE amministratore(";
$strSQL .= "id INT NOT NULL AUTO_INCREMENT,";   
$strSQL .= "username VARCHAR(50) NOT NULL UNIQUE,";  
$strSQL .= "password VARCHAR(255) NOT NULL,"; 
$strSQL .= "created_at DATETIME DEFAULT CURRENT_TIMESTAMP,"; 
$strSQL .= "PRIMARY KEY (id));";


if (mysqli_query($conn, $strSQL))
{
  echo "Tabella amministratore creata correttamente";
}
else
{
  echo "Errore nella creazione della tabella amministratore: " . mysqli_error($conn);
}

// Chiusura della connessione
mysqli_close($conn);

?>