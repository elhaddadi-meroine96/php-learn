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
function p7_ex8() {
    if (getPost('exercice') == 'p7ex8') {
        $path_parts = pathinfo($_FILES["file_p7ex8"]["name"]);
        
        if ($path_parts['extension'] != 'pdf')
            return '/!\ Attention il faut un PDF /!\ <br />'.p7_ex1('post', 'p7ex8', true, true, true);
        else
            return '
                Bonjour '.getPost('civ_p7ex8').' '.getPost('nom_p7ex8').' '.getPost('prenom_p7ex8').'
                Fichier : '.$path_parts['filename'].' '.$path_parts['extension'];
    } else
        return p7_ex1('post', 'p7ex8', true, true, true);
}
?>
</body>
</html>

