<?php 
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($r){
        echo "Jari-Jari = $r cm <br>" ;
        echo "Luahns lingkaran = " . 3.14 * $r * $r . "cm <br>" ;
        echo "<hr>";
    }

    hitungLuasLingkaran(10);

    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($r){
        echo "Jari-Jari = $r cm <br>" ;
        echo "Keliling lingkaran = " . 3.14 * $r * 2 . " cm <br>" ;
        echo "<hr>";
    }

    hitungKelilingLingkaran(20);

?>