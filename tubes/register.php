<?php 
    require 'inc/koneksi.php';
    require 'inc/functions.php';

    if (isset($_POST["register"])) {

        if(register($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- css -->
    <link rel="stylesheet" href="css/login.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="right-header">
                <a href="index.php"><i class="fa-solid fa-x" style="color : #464646"></i></a>
            </div>
            <div class="top-header">
                <header>Register</header>
            </div>

            <form action="" method="post">
                <div class="input-field">
                    <input type="text" class="input" name="username" placeholder="Username" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="password" placeholder="Password" required>
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="password1" placeholder="Confirm Password" required>
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-field">
                    <a href="index.php"><input type="submit" name="register" class="submit" value="Register"></a>
                </div>
            </form>


            <div class="bottom">
                <div class="left">
                    <label><a href="login.php">Login</a></label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>