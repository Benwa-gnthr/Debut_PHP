<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_PHP</title>
</head>
<body>
    <?php
    $v1 = "Benwa Blabla"; 
    $alias = &$v1;
    $alias = "Mon site est $alias";
    echo $alias
    ?>
</body>
</html>