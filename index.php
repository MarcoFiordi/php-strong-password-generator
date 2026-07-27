<?php 
    require_once __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password-generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="" method="GET">
        <label for="password_length">Inserisci la lunghezza della password da generare</label>
        <input type="number"
        id="password_length"
        name="length" 
        min="4" 
        max="30" 
        required>
        <button type="submit">invia</button>
    </form>

    <?php
        if (isset($_GET['length'])){
            $passwordLength = (int) $_GET['length'];
            $password = generaPassword($passwordLength);
            echo "La Password Generata è: " . $password;
        } 
    ?>
</body>
</html>