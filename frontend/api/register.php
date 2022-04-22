<?php
set_error_handler(function ($severity, $message, $file, $line) {
    throw new \ErrorException($message, $severity, $severity, $file, $line);
});
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:8000/auth/register/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'username' => $username,
        'password' => $password,
    ]);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo ($response);
    // $_SESSION['refresh_token'] = $refresh;
    // sleep(5);
    header("Location: ../index.html");
} catch (Exception $e) {
    echo ("error, wrong credentials");
}
echo ("<br/>");
echo ("<br/>");
echo ("<br/>");
echo ("<br/>");
echo ('<a href="http://localhost/dev/jwt_uz/frontend">home</a>');
restore_error_handler();