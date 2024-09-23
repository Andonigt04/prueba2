<?php include 'dropDeck.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <section id="deck">

            <form action="" method="POST">
                <input value="Show Card" type="submit">
            </form>
            <div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo '<br><img width="32px" src="./img/' . dropCard().'"/>';
                }
                ?>
            </div>
        </section>
        <section id="done">

        </section>
        <section id="hand">

        </section>
    </main>
</body>

</html>