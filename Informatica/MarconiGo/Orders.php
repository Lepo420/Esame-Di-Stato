<div id="nav">
<link rel="stylesheet" href="style.css">
<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="CategoriesP.php">Categoria</a> 
        <li><a href="BrandsP.php">Brand</a>
        <li><a href="ProductP.php">Prodotto</a> 
        <li><a href="OrdersP.php">Ordine</a> 
		<li><a href="RicercaP.php">Query 1 </a>
        <li><a href="RicercaP2.php">Query 2 </a>
        <li><a href="logout.php">Logout</a></li><br>
    </ul>  
		

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: login.php');
}

$hostname = "localhost";
$username = "root";
$password = "";

// Apertura della connessione con il server MySQL
$conn = mysqli_connect($hostname, $username, $password);
if (! $conn)
{
  die('Errore durante la connessione: ' . mysqli_connect_error());
}

// Selezione del database marconigo
$db1 = mysqli_select_db($conn, "marconigo");
if (! $db1)
{
  die('Accesso al database non riuscito: ' . mysqli_error($conn));
}

// Acquisizione dati dal form HTML

$order_id = $_POST["order_id"];
$product_id = $_POST["product_id"];
$id = $_POST["id"];
$qty = $_POST["qty"];

// Comando SQL - Inserimento dati nella tabella categories
$strSQL = "INSERT INTO orders (order_id, product_id, id, qty) ";
$strSQL .= "VALUES ('$order_id', '$product_id','$id','$qty')";

if (mysqli_query($conn, $strSQL))
{
  echo '<xmp> Brand aggiunta correttamente </xmp>';
}
else
{
  echo "<xmp> Errore nell'inserimento: </xmp>" . mysqli_error($conn);
}
// Chiusura della connessione
mysqli_close($conn);
?>
