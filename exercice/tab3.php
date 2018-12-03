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
    $ville = [
        01 => 'Ain', 02 => 'Allier',
        07 => 'Ardèche', 15 => 'Cantal',
        26 => 'Drôme', 38 => 'Isère',
        42 => 'Loire', 43 => 'Haute-Loire',
        63 => 'Puy-de-Dôme', 69 => 'Rhône',
        73 => 'Savoie', 74 => 'Haute-Savoie'
    ];
    $texte = $ville[69].'<br />';
    $ville[57] = 'Metz';
    
    ksort($ville);
    foreach ($ville as $key => $value) {
        $texte .= "{$key} => {$value}<br />"; 
    }
    echo $texte;

?>
</body>
</html>