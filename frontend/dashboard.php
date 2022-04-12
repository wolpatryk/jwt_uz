<?php
session_start();

$access_token = $_SESSION['access_token'];
$refresh_token = $_SESSION['refresh_token'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>access token</h1>
    <div><?php echo ($access_token); ?></div>
    <h1>refresh token</h1>
    <div><?php echo ($refresh_token); ?></div>
    <div><a href="./api/logout.php">Logout</a></div>
</body>
</body>

</html>