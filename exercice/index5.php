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
    $test = '/^[0-9]{2}$/';
    $rand = mt_rand(1, 53);
    
    if (preg_match($regex, $week)) {
        return 'Semaine : '.$week;
    } else
        return '<a href="index.php?view=6&semaine='.$rand.'">index.php?semaine='.$rand.'</a>';

?>
</body>
</html>