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
    $test = func_get_args()[0];
    $salle = func_get_args()[1];
    $d = ['1' => ['1', '2'], '12' => ['101'], 'Chez Leon' => ['Grande salle', 'Petite salle']];
    $test1 = array_rand($d, 1);
    $test2 = array_rand($d[$test1], 1);
    $lien = 'index.php?batiment='.$test1.'&salle='.$test2.'&view=6';
    if (array_key_exists(strtolower($test), $d) && in_array(strtolower($salle), $d[$test]))
        return '$test $salle';
    else
        return '<a href="'.$lien.'">'.$lien.'</a>';
echo $lien;
?>
</body>
</html>