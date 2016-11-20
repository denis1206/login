<?php
    session_start();

    require_once __DIR__ . '/vendor/autoload.php';

    $fb = new Facebook\Facebook([
        'app_id' => '1786421281617255',
        'app_secret' => '80c1957db0769f0e5cf7193d7b23ae74',
        'default_graph_version' => 'v2.5',
    ]);

    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email']; // optional
    $loginUrl = $helper->getLoginUrl('http://meusitedev.com.br/login/fb-callback.php', $permissions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
    ?>
    
</body>
</html>

