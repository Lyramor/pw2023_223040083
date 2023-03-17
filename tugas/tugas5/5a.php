<?php 
$mahasiswa = [
        [
            'nama' => 'Muhammad Marsa Nurjaman',
            'npm' => '223040083',
            'email' => 'marsa.223040083@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'marsa.jpg'
        ],
        [
            'nama' => 'Dzikri Setiawan',
            'npm' => '223040072',
            'email' => 'dzikri.223040072@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' =>  'dzikri.jpg'
        ],
        [
            'nama' => 'Kaka Praditha Putra',
            'npm' => '223040087',
            'email' => 'kaka.223040087@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'kaka.jpg'
        ],
        [
            'nama' => 'Rivaldy Novyan Dwi Putra',
            'npm' => '223040110',
            'email' => 'Rivaldy.223040110@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'valdi.jpg'
        ],
        [
            'nama' => 'Moch Zuhdi Maulana Nabilah',
            'npm' => '223040101',
            'email' => 'zuhdi.223040101@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'zuhdi.jpg'
        ],
        [
            'nama' => 'Muhammad Daffa Riyadi',
            'npm' => '223040120',
            'email' => 'daffa.223040120@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'dafrb.jpg'
        ],
        [
            'nama' => 'Muhammad Daffa Mussyaffa',
            'npm' => '223040048',
            'email' => 'daffa.223040048@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'dafsus.jpg'
        ],
        [
            'nama' => 'Muhammad Alfath Septian',
            'npm' => '223040014',
            'email' => 'alfath.223040014@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'afat.jpg'
        ],
        [
            'nama' => 'Arley Prajaya Gunawan',
            'npm' => '223040106',
            'email' => 'arley.223040106@mail.unpas.ac.id',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'arley.jpg'
        ],
        [
            'nama' => 'Chandra Ardiansyah',
            'npm' => '223040',
            'email' => 'chandra.223040110',
            'jurusan' => 'Teknik Informatika',
            'foto' => 'chandra.jpg'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) {?>
    <br>
    <ul>
        <li>
            <img src="image/<?= $mhs['foto']; ?>" width = "150" height = "150" border = "3px solid black">
        </li>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>NPM : <?= $mhs['npm']; ?></li>
        <li>Email : <?= $mhs['email']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>