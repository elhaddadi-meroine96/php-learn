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
    if (getPost('delCook'))
        setcookie("actEncode","",time()-1);
    if ($_COOKIE["actEncode"] || getPost('pseudo'))
        return '<form method="POST" action="index.php?view=8">
                <p>
                    <input type="submit" name="delCook" value="Effacer Cookie">
                <p>
            </form>';
    else
        return 'Il n\'y a pas encore de cookie';
}

?>
</body>
</html>