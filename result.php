<?php
$user_text = $_GET["text"];
$user_result = $_GET["result"];

$word = array($user_result);
$censor_word = array("***");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>

<body>
    <h1>
        <?php echo $user_text; ?>
    </h1>
    <h1>
        <?php echo strlen($user_text); ?>
    </h1>
    <h1>
        <?php
        echo $user_result = str_replace($word, $censor_word, $user_text);
        ?>
    </h1>
</body>

</html>