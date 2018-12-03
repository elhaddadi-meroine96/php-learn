<!DOCTYPE <!DOCTYPE html>
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
function genreAge($array = array('genre' => 'homme', 'age' => 42)) {   
    $genre = $array['genre'];                                
    $age = $array['age'];                                     
    if ($genre == 'homme')
        $texte = 'Vous êtes un homme ';
    else if ($genre == 'femme')
        $texte = 'Vous êtes une femme ';
    if ($age < 18)
        $texte .= 'et vous êtes mineur';
    else
        $texte .= 'et vous êtes majeur';
    return $texte;
}
echo $texte
?>
</body>
</html>