<?php

function containsDot($email)
{
    return strripos($email, ".") !== false;
}

function containsAt($email)
{
    return strripos($email, "@") !== false;
}

function validaded($email)
{
    if (containsDot($email) < containsAt($email)) {
        echo "<script type='text/javascript'>alert('$email');</script>";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];
    validaded($email);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input name="email" type="email" placeholder="Enter your email" required>
        <input type="submit" value="Submit">
    </form>
</body>

</html>