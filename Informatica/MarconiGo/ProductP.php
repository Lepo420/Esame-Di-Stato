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
		<br><h1>Inserisci Prodotto</h1>
		<form action="Product.php" method="post">
        Codice Prodotto:<input type="text" name="product_id"><br />
        Codice Categoria: <input type="text" name="cat_id"><br />
        Codice Brand: <input type="text" name="brands_id"><br />
        Titolo del prodotto: <input type="text" name="product_title"><br />
        Costo del prodotto: <input type="text" name="product_price"><br />
		Quantità: <input type="text" name="product_qty"><br />
        Descrizione prodotto: <input type="text" name="product_desc"><br />
        <input type="submit" value="Aggiungi">		
			</div>
    </ul>   
    </div>