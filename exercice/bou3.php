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
    $var = 100;
    $var2 = mt_rand(1, 100);
    for ($i = 20; $var >= $i; $var--) {
        if ($var % 5 == 0 && $var != 100)
            $return .= .($var * $var2).;
        else
            $return .= .($var * $var2).;
    }
   echo $return;

?>
</body>
</html>