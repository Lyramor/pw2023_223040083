<?php 
function urutanAngka($angka){
    $mulai = 1;
    for ($i = 1; $i <= $angka; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo $mulai . " ";
            $mulai++;
        }
        echo "<br>";
    }
}

urutanAngka(5);
?>