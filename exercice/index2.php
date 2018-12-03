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
    if (preg_match($test, $age))
        return 'Salut tu a : '.$age .' ans';
    else
        return '<a href="index.php?view=6&age=42">index.php?age=42</a>';
echo $test;
?>
</body>
</html>