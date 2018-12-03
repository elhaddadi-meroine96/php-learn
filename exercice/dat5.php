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
function date() {
    $start = strtotime('16-05-2016');
    $end = strtotime('now');
    $return = ceil(abs($end - $start) / 86400);
    return $return.' jours entre le 16-05-2016 et le '.date('d-m-Y').'.';
}

?>
</body>
</html>