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
    $dtime = DateTime::createFromFormat("d/m G:i", "02/08 15:00");
    $timestamp = $dtime->getTimestamp();
    return .time()..$timestamp;
}


?>
</body>
</html>