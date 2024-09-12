<?php

function batuketa($zb1, $zb2){
    static $resto;

    $emaitza = $zb1 + $zb2 + $resto;

    $resto = $emaitza;

    return $emaitza;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa - 3</title>
</head>
<body>
    <?php

    $zb1 = 4;

    $zb2 =100;
    
    echo "aldagaia: " . batuketa($zb1, $zb2) . " <br>";
    echo "aldagaia: " . batuketa($zb1, $zb2) . " ";

    $sum = $zb1+$zb2;
    $res = $zb1-$zb2;
    $por = $zb1*$zb2;
    $div = $zb1/$zb2;

    echo "<br>".$sum."<br>".$res."<br>".$por."<br>".$div;

    ?>
</body>
</html>