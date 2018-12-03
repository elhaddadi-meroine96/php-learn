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
    $date1 = func_get_args()[0]; 
    $date2 = func_get_args()[1];
    $test = '/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/';
    $date = date('d/m/Y', mt_rand(1262055681, time()-86400));
    $date2 = date('d/m/Y', time());
    $lien = 'index.php?date1='.$date1.'&date2='.$date2.'&view=6';
    if (preg_match($test, $date1) && preg_match($test, $date2))
        return '.$date1 .''.$date2';
    else
        return '<a href="'.$lien.'">'.$lien.'</a>';

?>
</body>
</html>