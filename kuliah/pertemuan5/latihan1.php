<?php 
    // array
    // membuat array
    $hari = array ('senin', 'selasa', 'rabu');
    $bulan = ['Jaruari', 'Februari', 'Maret'];
    $myArray = ['Marsa', 18, false];
    $binatang = ['😺', '🐶', '🐵', '🦆', '🐔'];

    // mencetak array
    echo $hari[2];
    echo "<br>";

    var_dump($hari);
    echo "<br>";

    print_r($hari);
    echo "<br>";

    print_r($binatang);
    echo "<hr>";

    //manipulasi array
    //menambahan elemen menggunkan index

    $hari[3] = "kamis";
    print_r($hari);
    echo "<br>";

    $hari[] = "jum'at";
    $hari[] = "sabtu";
    $hari[] = "minggu";
    print_r($hari);
    echo "<br>";

    // menambahkan elemen di akhir array menggunakan array_push
    array_push($bulan, 'April', 'Mei', 'Juni');
    print_r($bulan);
    echo "<hr>";

    // menambah elemen di awal array menggunakan array_unshift
    array_unshift($binatang, "🐍", "🦅", "🦁");
    print_r($binatang);
    echo "<br>";

    // menghapus elemen di belakang array menggunakan array_pop
    array_pop($hari);
    print_r($hari);
    echo "<hr>";

    // menggunakan element di depan array dengan array_shift
    array_shift($bulan);
    print_r($bulan);
    echo "<hr>";
?>