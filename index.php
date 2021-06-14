<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 8.1</title>
    </head>
    <body >
        <?php
            /*  Faire une page HTML permettant de donner à l'utilisateur :
                    son User Agent
                    son adresse ip
                    le nom du serveur
            */
            $userAgent=$_SERVER['HTTP_USER_AGENT'] ;
            $serverName=$_SERVER['SERVER_NAME'];
            $serverAddrIpV4=gethostbyname($serverName);
            $clientAddrIp=$_SERVER['REMOTE_ADDR'];
        ?>
        <p>Client addr : <?= $clientAddrIp ?></p>
        <p>User agent : <?= $userAgent ?></p>
        <p>Server addr IP : <?= $serverAddrIpV4 ?></p>
        <p>Server name : <?= $serverName ?></p>
    </body>
</html>