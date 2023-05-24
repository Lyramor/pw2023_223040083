<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

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
                <a href="kitasehat.php"><i class="fa-solid fa-x" style="color : #464646"></i></a>
            </div>
            <div class="top-header">
                <span>have an account?</span>
                <header>Login</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="Username" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" required>
                <i class="fa-solid fa-key"></i>
            </div>
            <div class="input-field">
                <a href="kitasehat.php"><input type="submit" class="submit" value="Login"></a>
            </div>

            <div class="bottom">
                <div class="left">
                    <label><a href="register.php">Register</a></label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password</a></label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>