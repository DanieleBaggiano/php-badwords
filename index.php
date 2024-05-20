<?php
// echo "Hello";

$username = $_GET["username"];

// echo "Ciao " . $username;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-intro</title>
</head>

<body>
    <form action="result.php" method="GET">
        <label for="text">Inserisci il testo</label>
        <textarea name="text" id="text"></textarea> <br>
        <label for="result">Frase censurata</label>
        <input name="result" type="text" id="result"> <br>
        <button type="submit">click</button>
    </form>
</body>

</html>