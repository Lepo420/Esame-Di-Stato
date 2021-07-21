<?php
// Includi file di configurazione
require_once "config.php";
 
// Definisce le variabili e inizializza con valori vuoti
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Elaborazione dei dati del modulo quando viene inviato il modulo
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Convalida nome utente
    if(empty(trim($_POST["username"]))){
        $username_err = "Si prega di inserire un nome utente";
    } else{
        // Prepara un'istruzione select
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Associa le variabili all'istruzione preparata come parametri
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
           // Imposta i parametri
            $param_username = trim($_POST["username"]);
            
            // Tenta di eseguire l'istruzione preparata
            if(mysqli_stmt_execute($stmt)){
                /* memorizza il risultato */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "<xmp>Questo nome utente è già stato utilizzato.</xmp>";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Ops! Qualcosa è andato storto. Per favore riprova più tardi.";
            }

            // Chiudi istruzione
            mysqli_stmt_close($stmt);
        }
    }
    
    // Convalida la password
    if(empty(trim($_POST["password"]))){
        $password_err = "Per favore inserire una password";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La password deve contenere almeno 6 caratteri.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Convalida conferma password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Si prega di confermare la password";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "La password non corrisponde.";
        }
    }
    
   // Controlla gli errori di input prima di inserirli nel database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepara un'istruzione di inserimento
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Associa le variabili all'istruzione preparata come parametri
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
           // Imposta i parametri
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Crea un hash della password
            
            // Tenta di eseguire l'istruzione preparata
            if(mysqli_stmt_execute($stmt)){
                // Reindirizza alla pagina di accesso
                header("location: login.php");
            } else{
                echo "Ops! Qualcosa è andato storto. Per favore riprova più tardi.";
            }

            // Chiudi istruzione
            mysqli_stmt_close($stmt);
        }
    }
    
    // Chiudere la connessione
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrati</title>
    <link rel="stylesheet" href="stile.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="bg-image"></div>
    <div class="bg-text">
    <div class="wrapper">
        <h2>Registrati</h2>
        <p>Registra il tuo account</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Conferma Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="invia">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Hai un account? <a href="login.php">Login</a>.</p>
        </form>
    </div>    
</body>
</html>