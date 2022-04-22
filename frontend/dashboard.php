<?php
session_start();

$access_token = $_SESSION['access_token'];
$refresh_token = $_SESSION['refresh_token'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .break-word {
        word-wrap: break-word;
    }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>

    <!-- CSS -->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div class="container">
        <div class="card-panel">
            <h1>access token</h1>
            <div class="break-word"><?php echo ($access_token); ?></div>
        </div>
        <div class="card-panel">
            <h1>refresh token</h1>
            <div class="break-word"><?php echo ($refresh_token); ?></div>
        </div>
        <div><a href="./api/logout.php"><button class="btn">Logout</button></a></div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</body>

</html>