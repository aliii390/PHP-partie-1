<?php
$lastname = "Jacques";
$firstname = "paul";
$age = 35;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>
<body>
    <h1>Bonjour <?= $lastname . " " . $firstname ?>, tu as <?= $age ?></h1>
</body>
</html>