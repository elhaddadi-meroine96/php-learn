 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
   
   
    $magnitude = 5;
    switch ($magnitude) {
        case 1:
            $texte = "Micro-séisme impossible à ressentir.";
            break;
        case 2:
            $texte = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
            break;
        case 3:
            $texte = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
            break;
        case 4:
            $texte = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
            break;
        case 5:
            $texte = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
            break;
        case 6:
            $texte = "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
            break;
        case 7:
            $texte = "	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            break;
        case 8:
            $texte = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
            break;
        case 9:
            $texte = "Séisme capable de tout détruire sur une très vaste zone.";
            break;
    }
    if ($magnitude == 1)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 2)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 3)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 4)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 5)
        $texte = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    if ($magnitude == 6)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 7)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 8)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    if ($magnitude == 9)
        $texte = "Séisme capable de tout détruire sur une très vaste zone.";
    for ($i = 1; $i <= $magnitude && $i <= 9; $i++) {
        if ($i == $magnitude)
         $texte = ["1", "2", "3", "4", "5", "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.", "7", "8", "9"][$i];
    }
    echo $texte;

?>
</body>
</html>