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

function nom() {
    session_start ();
    $_SESSION['nom'] = 'El Haddadi';
    $_SESSION['prenom'] = 'Meroine';
    $_SESSION['age'] = 22;
    return '<a href="session.php?ex=1">Voir les vars session</a>';
}

?>
</body>
</html>