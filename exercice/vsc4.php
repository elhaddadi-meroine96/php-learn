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
function cookie() {
    if ($_COOKIE["actEncode"] || getPost('pseudo'))
        return '<a href="session.php?ex=4">Voir le cookie</a>';
    else
        return "Il n'y a pas encore de cookie.";
}

?>
</body>
</html>