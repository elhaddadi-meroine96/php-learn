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
function nombre($num1, $num2) {
    if ($num1 > $num2)
        $texte = 'Le premier nombre est plus grand';
    else if ($num1 < $num2)
        $texte = 'Le premier nombre est plus petit';
    else
        $texte = 'Les deux nombres sont identiques';
    return $texte;
}

?>
</body>
</html>