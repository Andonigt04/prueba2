<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input name="choice" type="submit" value="Harri">
        <input name="choice" type="submit" value="Horri">
        <input name="choice" type="submit" value="Har">
        <p><?php
            include 'ariketa26Random.php';
            ?><?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo randoMixer();
                }
                ?>
        </p>
    </form>

</body>

</html>