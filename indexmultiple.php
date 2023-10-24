<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylemultiple.css">
    <title>TableDeMultiplication</title>
</head>
<body>
    <h1>Révisez vos tables de Multiplications !!</h1>
    <?php
    echo "<table cellspacing=\"0px\"> <th> &nbsp; X &nbsp; </th>";
    for($i=1; $i<11;$i++){
        echo "<th>&nbsp; $i&nbsp; </th>";        
    }
    echo "</tr>";
    for($i=1; $i<11;$i++){
        echo "<th>&nbsp; $i&nbsp; </th>";
    
    for($j=1; $j<11; $j++){
        echo "<td>&nbsp; &nbsp; <b>".$i*$j."&nbsp; &nbsp; </td>";
    }
    echo "</b></tr>";
    }
    echo "</table>";
    ?>
    
    <script src="./script.js"></script>
</body>
</html>