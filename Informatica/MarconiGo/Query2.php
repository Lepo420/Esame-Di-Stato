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
        <li><a href="index2.php">Home</a></li>
	    <li><a href="Query1.php">Query 1 </a>
        <li><a href="Query2.php">Query 2 </a>
        <li><a href="logout.php">Logout</a></li><br>
    </ul> 
            <div class="spaziatura">
            <h1>Inserisci i valori</h1>
            <form action="Query2P.php" method="post">
            Nome brand:<input type="text" name="brands_title"><br/>
            <input type="submit" value="Aggiungi">		
                </div>
        </ul>   
        </div>
        
        
        