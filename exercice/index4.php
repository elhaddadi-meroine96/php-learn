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
    $d['lang'] = ['html', 'php', 'css', 'python']; 
    $d['serv'] = ['apache', 'lamp', 'ngix', 'mamp'];
    $rand = mt_rand(0, 3);
    $url = 'index.php?langage='.$d['lang'][$rand].'&serveur='.$d['serv'][$rand].'&view=6';
    if (in_array(strtolower($langage), $d['lang']) && in_array(strtolower($serveur), $d['serv']))
        return 'Langage : '.$langage .'<br />Serveur : '.$serveur;
    else
        return '<a  href="'.$url.'">'.$url.'</a>';
echo 

?>
</body>
</html>