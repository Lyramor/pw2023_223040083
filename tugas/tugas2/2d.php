<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2d</title>
    <style>
        .table{
            border: 1px solid black;
        }

        .warna1{
            background-color: black;
            height: 50px;
            width: 50px;
        }

        .warna2{
            background-color: white;
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <table class="table" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) :?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++) :?>
                    <?php if(($i + $j) % 2 == 0) :?>
                    <td class="warna1">
                        <?php else: ?>
                    </td>
                    <td class="warna2">
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>    
    </table>
</body>
</html>