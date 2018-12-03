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
    $texte = '';
    foreach ($array as $value) {
        if ($value == 'Jojo')
            $texte .=  "Mail : Salut $value, devine quoi ! Je m dans samedi dans deux semaines ! Grosse bringue de breton ^^ BZH représente<br />";
        else
            $texte .= "Mail : Salut $value, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br />";
    }
    echo $texte;

?>
</body>
</html>