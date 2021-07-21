<?php

 
// File config.php
require_once "config.php";
 

// Definisci le variabili e inizializza con valori vuoti
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Elaborazione dei dati del modulo quando il modulo viene inviato
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //Controlla se il nome utente è vuoto
    if(empty(trim($_POST["username"]))){
        $username_err = "Inserire username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Controlla se la password è vuota
    if(empty(trim($_POST["password"]))){
        $password_err = "Inserire la password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Convalida le credenziali
    if(empty($username_err) && empty($password_err)){
        // Prepara una dichiarazione di select
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Associare le variabili all'istruzione preparata come parametri
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // mettere i parametri
            $param_username = $username;
            
            // Tenta di eseguire l'istruzione preparata
            if(mysqli_stmt_execute($stmt)){
                // Immagazina il risultato
                mysqli_stmt_store_result($stmt);
                
                // Verifichiamo se l username esiste, se si controlliamo anche la password se e corretta
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Associa le variabili dei risultati
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password corretta, inizia una nuova sessione
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            // Indirizzamento verso index.php
                            header("location: index2.php");
                        } else{
                            // Passowrd o user errati
                            $login_err = "Username o Password errate";
                        }
                    }
                } else{
                    // Il nome utente non esiste, visualizza un messaggio di errore generico
                    $login_err = "L'username non esiste.";
                }
            } else{
                echo "Oops! dati errati, riprova.";
            }

            //chiudi la statemant
            mysqli_stmt_close($stmt);
        }
    }
    
    // chiudi la connessione
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="stile.css">
    <style>
    </style>
</head>
<body>
<div class="bg-image"></div>
    <div class="bg-text">
        <h2>Login</h2>
        <p>Inserire le credenziali per il login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>