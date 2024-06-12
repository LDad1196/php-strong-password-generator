<?php 
function generaPassword($lunghezza) {
    $array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    $password = "";

    if(isset($lunghezza) && is_numeric($lunghezza)) {
        for ($i = 0; $i < $lunghezza; $i++) {
            $randomKey = array_rand($array);
            $password .= $array[$randomKey];
        }
        return "La password generata è: " . $password;
    } else {
        return "Errore: Lunghezza della password non specificata o non valida.";
    }
}

// Verifica se il form è stato inviato
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lunghezza"])) {
    $password = generaPassword($_POST["lunghezza"]);
} else {
    $password = "Inserisci la lunghezza della password desiderata.";
}
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3">
                <label for="lunghezza" class="form-label">Lunghezza della Password:</label>
                <input type="number" class="form-control" id="lunghezza" name="lunghezza" required>
            </div>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>
    </div>
</body>
</html>