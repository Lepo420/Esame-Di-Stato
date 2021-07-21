<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: login.php');
}
?>
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
		<div class="spaziatura"><br>
		<br><h1>Inserisci Ordine</h1>
		<form action="Orders.php" method="post">
        Codice ordine:<input type="text" name="order_id"><br />
        Codice Prodotto: <input type="text" name="product_id"><br />
        Codice cliente: <input type="text" name="id"><br />
        Quantità: <input type="text" name="qty"><br />
        <input type="submit" value="Aggiungi">		
			</div>
    </ul>   
    </div>