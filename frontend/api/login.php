<?php
set_error_handler(function ($severity, $message, $file, $line) {
    throw new \ErrorException($message, $severity, $severity, $file, $line);
});
try {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:8000/auth/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'username' => $login,
        'password' => $password,
    ]);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $response = curl_exec($ch);
    $data = json_decode($response, TRUE);
    $access = $data['access'];
    $refresh = $data['refresh'];
    // echo ("access token");
    // echo ("<br/>");
    // echo ($access);
    // echo ("<br/>");
    // echo ("refresh token");
    // echo ("<br/>");
    // echo ($refresh);
    curl_close($ch);
    // echo ("<br/>");
    echo ('correct credentials');
    session_start();
    $_SESSION['access_token'] = $access;
    $_SESSION['refresh_token'] = $refresh;
    header("Location: ../dashboard.php");
} catch (Exception $e) {
    echo ("error, wrong credentials");
}


echo ("<br/>");
echo ("<br/>");
echo ("<br/>");
echo ('<a href="http://localhost/jwt/frontend/">home</a>');
restore_error_handler();