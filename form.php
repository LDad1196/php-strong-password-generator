<?php 
    $password = "Ciao, quanto vuoi che sia lunga la tua password?";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>
<body>
    <h1 class="text-center py-3">
        <?= $password ?>
    </h1>

    <form action="password.php" method="get" class="text-center py-3">
        <input type="number" name="lunghezza" placeholder="Inserisci lunghezza password">
        <button type="submit">Genera Password</button>
    </form>
</body>
</html>