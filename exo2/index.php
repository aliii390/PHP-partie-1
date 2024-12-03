<?php


$lastname = "jacques";

$firstname =  "paul";

$age = 20;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2><?= $lastname ?></h2>    <!-- ?= vaut  php echo -->
    <h1><?php echo $firstname ?></h1>
    <h1><?php echo $age ?></h1>
</body>
</html>
