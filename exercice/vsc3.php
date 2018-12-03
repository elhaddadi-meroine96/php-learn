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
function pseudo() {
    if (getPost('pseudo') && getPost('password')) {
        $key = 'keyUseFor Encypt/Decrypt';
        $stringCrypt = getPost('pseudo').'[SPLIT]'.getPost('password');
        $mc_iv = mcrypt_create_iv(
            mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
            MCRYPT_DEV_URANDOM
        );
        $encode = base64_encode(
            $mc_iv .
            mcrypt_encrypt(
                MCRYPT_RIJNDAEL_128,
                hash('sha256', $key, true),
                $stringCrypt,
                MCRYPT_MODE_CBC,
                $mc_iv
            )
        );
        setcookie("actEncode", $encode, time()+3600);
    }
    return '
        <form method="POST" action="index.php?view=8">
            <p>
                <label for="pseudo">Votre pseudo :</label>
                <input type="text" name="pseudo" id="pseudo" value="'.getPost('pseudo').'" />
                <br />
                <label for="password">Votre pr&eacute;nom :</label>
                <input type="password" name="password" id="password" value="'.getPost('password').'" />
                <br />
                <input type="submit" name="send_'.$exval.'" value="Set Cookie" />
            </p>
        </form>';
}

?>
</body>
</html>