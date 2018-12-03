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
    $var = mt_rand(1, 100); 
    for ($i = 0; $i <= 20; $i++) {
        if ($i % 5 == 0 && $i != 0)
            $return .= .($i * $rand).;
        else
            $return .= .($i * $rand).;
    }
    echo $return;

?>
</body>
</html>