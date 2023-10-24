<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&family=Roboto&family=Rubik&display=swap" rel="stylesheet">
    <title>Test_PHP</title>
</head>
<body>
<div class="container">
        <h1>Voici mon tableau</h1>
    <?php
        // $tb = ["Paris", "Londres", "Rome", "Berlin"]
        // echo "<br>";
        // for($i=0; $i<3; $i++){
        //     echo $tb[$i],"<br>"; 
        // }
        
        // $tab = [
        //     'Paris'=>'France',
        //     'Londres'=>'Angleterre',
        //     'Berlin'=>'Allemagne',
        //     'Rome'=>'Italie',
        // ];

        // echo $tab['Berlin']
        // foreach($tab as $ville=>$pays){
        //     echo $ville. "->".$pays."<br>"
        // };

        $teb = array(
            array("<b>LIBRAIRIE</b>", "<b>TITRES</b>", "<b>REMISE</b>"),
            array("FNAC", "GOOGLE SHEETS", "40%"),
            array("FNAC", "EXCEL", "40%"),
            array("EXPRESS", "GOOGLE DOCS", "38%"),
            array("EXPRESS", "GOOGLE SLIDES", "40%"),
        );
        echo "<table border width=\"50%\">";
        foreach($teb as list($librairie, $titre, $remise)){
            echo"<tr><td>".$librairie. "</td>"."<td>".$titre."</td>". "<td>".$remise."</td></tr></br>";
        };
        echo "</table>";
        echo "<br>";
        echo "<br>";

        echo "<br>";
        echo "<br>";
        $tablo[1] = "Pomme";
        $tablo[2] = "Poire";
        $tablo[3] = "Orange";
        $tablo[4] = "Cerise";
        $tablo[5] = "Mangue";
        
        echo "</ol>";
        echo "<br>";
        echo "<br>";

        $tablo1[]="Stylo";
        $tablo1[]="Crayon";
        $tablo1[]="Gomme";
        $tablo1[]="Règle";
        $tablo1[]="Cahier";

        for($i=0;$i<count($tablo1);$i++){
            echo $tablo1[$i]."<br>";
        };

        $tablo2 = ["Voiture", "Vélo", "Moto", "Camion", "Bateau"];
        echo "<br>";
        print_r($tablo2);
    ?>        
    </div>
</body>
</html>