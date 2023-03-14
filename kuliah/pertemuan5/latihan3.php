<?php 
    $binatang = ['😺', '🐶', '🐵', '🦆', '🐔'];
    $makanan = ['🍚', '🍕', '🍔', '🌮', '🥙', '🥪' ];
    $mahasiswa = ['Marsa', 'zuhdi', 'Kaka', 'Adira', 'Dzikri',];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($binatang as $a => $m) { ?>
    <ul>
        <li>Nama : <?= $mahasiswa[$a]; ?></li>
        <li> Makanan Favorit : <?= $makanan[$a]; ?></li>
        <li>Binatang Peliharaan : <?= $binatang[$a]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>