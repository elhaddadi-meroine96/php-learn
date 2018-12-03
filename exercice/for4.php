<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
function nom() {
    if (getPost('exercice') == 'nom')
        return .getPost('nom')..getPost('prenom');
    else
        return false;
}

?>
</body>
</html>

