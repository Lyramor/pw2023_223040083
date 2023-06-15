<?php
session_start();
require "inc/koneksi.php";

// Cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

  // Ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT id, username, role FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

  // Cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['id'] = $row['id'];
    }
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  // Cek username
    if (mysqli_num_rows($result) === 1) {
    // Cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // Set session
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $row['role'];
        $_SESSION["id"] = $row['id'];

      // Redirect ke halaman sesuai peran
        if ($row['role'] === 'admin') {
        header("Location: adminpanel/index.php");
        exit;
        } else if ($row['role'] === 'user') {
        header("Location: index.php");
        exit;
        } else {
        echo "Anda tidak memiliki akses.";
        }
    } else {
        $error = true;
    }
    } else {
    $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
                <a href="index.php"><i class="fa-solid fa-x" style="color: #464646"></i></a>
            </div>
            <div class="top-header">
                <span>Have an account?</span>
                <header>Login</header>
            </div>

            <?php if (isset($error)) : ?>
                <p style="color: red;">Username / Password salah</p>
            <?php endif; ?>
            <form action="" method="post">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" autofocus autocomplete="off" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" autofocus autocomplete="off" required>
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" name="login" value="Login">
                </div>
            </form>

            <div class="bottom">
                <div class="left">
                    <label><a href="register.php">Register</a></label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
