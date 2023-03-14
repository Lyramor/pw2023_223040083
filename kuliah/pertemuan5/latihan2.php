<?php 
    $binatang = ['😺', '🐶', '🐵', '🦆', '🐔'];
    $makanan = ['🍚', '🍕', '🍔', '🌮', '🥙', '🥪' ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < count($binatang); $i++){ ?>
        <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
    <br>

    <h2>Daftar Makanan</h2>
    <ul>
        <?php for($j = 0; $j < count($makanan); $j++){ ?>
        <li><?= $makanan[$j]; ?></li>
        <?php } ?>
    </ul>
    <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach($binatang as $b) {?>
        <li><?= $b; ?></li>
        <?php } ?>
    </ol>
</body>
</html>

