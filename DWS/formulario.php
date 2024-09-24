<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!isset($_POST["submit"])) { ?>
        <form action="./formularioAction.php" method="post">
            <input type="text" name="name" id="name">
            <input type="password" name="password" id="password">
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php } ?>
</body>

</html>