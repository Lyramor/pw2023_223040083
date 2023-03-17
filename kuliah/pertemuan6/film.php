<?php 
    $film = [
        [
            'poster' => 'castle.png ',
            'judul' => 'Howl\'s Moving Castle',
            'tahun' => '2004',
            'genre' => ['animition,', 'adventure,', 'family.'],
            'pu' => ['Chieko Baisho,', 'Takuya Kimura,', 'Tatsuya Gatsun.'],
            'sutradara' => ['Hayao Mizaki', '.']
        ],
        [
            'poster' => 'turning_red.png ',
            'judul' => 'Turning Red',
            'tahun' => '2022',
            'genre' => ['animtion, ', 'adventure, ', 'comedy.'],
            'pu' => ['Rosalie Chiang, ', 'Sandra Oh,', 'Ava Morse.'],
            'sutradara' => ['Domee Shi', '.']
        ],
        [
            'poster' => 'big_hero_6.png ',
            'judul' => 'Big Hero 6',
            'tahun' => '2014',
            'genre' => ['animation, ', 'Adventure, ', 'Comedy.'],
            'pu' => ['Ryan Potter, ', 'Robert L Baird, ', 'Daniel Gerson.'],
            'sutradara' => ['Don Hall, ', 'Chris Whilliams.']
        ],
        [
            'poster' => 'interstellar.png ',
            'judul' => 'Interstellar',
            'tahun' => '2014 - 2021',
            'genre' => ['Drama,', 'Adventure,', 'Sci-Fi.'],
            'pu' => ['Matthew McConaughey, ', 'Anne Hathaway, ', 'Jessica Chastain.'],
            'sutradara' => ['Christopen Nolan', '.']
        ],
        [
            'poster' => 'sprited.png ',
            'judul' => 'Sprited Away',
            'tahun' => '2001',
            'genre' => ['animition, ', 'adventure, ', 'family.'],
            'pu' => ['Dhaveig Chase, ', 'Suzanne Pleshette, ', 'Miyu Irino.'],
            'sutradara' => ['Hayao Miyazaki', '.']
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php  foreach($film as $f) {?>
    <ul>
        <li>
            <img src="images/<?= $f['poster']; ?>" width ="120" height="200">
        </li>
        <li>Judul : <?= $f['judul']; ?></li>
        <li>Tahun : <?= $f['tahun']; ?></li>
        <li>Genre : 
            <?php foreach($f['genre'] as $gen){
                echo $gen;
            } ?>
        </li>
        <li>Pemeran Utama : 
            <?php foreach($f['pu'] as $p){
                echo $p;
            } ?>
        </li>
        <li>Sutradara : 
            <?php foreach($f['sutradara'] as $su){
                echo $su;
            }?>
        </li>
    </ul>
    <?php } ?>
</body>
</html>