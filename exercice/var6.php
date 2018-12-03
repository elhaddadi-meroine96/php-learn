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


$prix = 785;
$ristourne = ($pourcentage * $prix) / 100;
$pourcentage = 30;
$reduction = $prix - $ristourne;
echo $prix;
echo $reduction;
echo $ristourne;
echo $pourcentage;


?>
</body>
</html>