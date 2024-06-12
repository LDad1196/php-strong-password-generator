<?php 
    $password = "La password generata è: ";
    
    $passwordLenght = $_GET["lunghezza"];
    
    $array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    
    // Inizializza la variabile per la password generata
    $generatedPassword = "";
    
    // Verifica se è stata impostata la lunghezza della password e se è un numero valido
    if(isset($passwordLenght) && is_numeric($passwordLenght)) {
        // Genera la password con elementi casuali dall'array
        for ($i = 0; $i < $passwordLenght; $i++) {
            $randomKey = array_rand($array);
            $generatedPassword .= $array[$randomKey];
        }
    } else {
        $generatedPassword = "Errore: Lunghezza della password non specificata o non valida.";
    }
    
    // Concatena la parte iniziale della frase con la password generata
    $password .= $generatedPassword;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Generatore di Password</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center py-3"><?= $password ?></h1>
    </div>
</body>
</html>