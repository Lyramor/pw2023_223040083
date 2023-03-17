<?php 

// array Assosiative
// array yang indexnya adalah string yang kita buat sendiri
// urutannya tidak berpengaruh apabila memiliki keyword yang sama

    $mahasiwa = [
        ['nama' => 'Marsa', 
        'binatang' => '😺', 
        'makanan' => ['🍚', '🍕','🍔', '🥙', '🥪']
        ], 
        ['nama' => 'zuhdi', 
        'binatang' => '🐶',
        'makanan' => ['🍚', '🍕','🍔', '🥙', '🥪']
        ], 
        ['nama' => 'Kaka', 
        'binatang' => '🐵',
        'makanan' => ['🍚', '🍕','🍔', '🥙', '🥪']
        ], 
        ['nama' => 'Adira',
        'binatang' => '🦆',
        'makanan' => ['🍚', '🍕','🍔', '🥙', '🥪']
        ], 
        ['nama' => 'Dzikri',
        'binatang' => '🐔',
        'makanan' => ['🍚', '🍕','🍔', '🥙', '🥪']
        ]
    ];
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
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiwa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs ['nama']; ?></li>
        <li>Makanan Favorit : 
            <?php foreach($mhs['makanan'] as $mkn){
                echo $mkn;
            } ?>
        </li>
        <li>Binatang peliharaan : <?= $mhs ['binatang']; ?></li>
    
    </ul>
    <?php } ?>
</body>
</html>

