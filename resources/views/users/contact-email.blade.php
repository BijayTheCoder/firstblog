<?php

use Illuminate\Mail\Message;

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
    <h2>Hello Admin,</h2><br>
    You received an email from : {{ $fullname }}<br>
    Here are the details:<br>
    <b>Full Name:</b> {{ $fullname }}<br>
    <b>Email:</b> {{ $email }}<br>
    <b>Message:</b> {{ $user_message }}<br>
    Thank You
</body>
</html>

