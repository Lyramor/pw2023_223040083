
<?php 
require('functions.php');
    $title = "Home";
    $students = [
        [
            "nama" => "M Marsa", 
            "npm" => "223040083",
            "email" => "mmarsa@gmail.com"
        ],
        [
            "nama" => "Dzikri", 
            "npm" => "223040072",
            "email" => "dzikri@gmail.com"
        ],
    ];

    //dd($_SERVER["REQUEST_URI"]);
    // pw2023_223040083/kuliah/pertemuan9/
    require('view/index.view.php');
?>