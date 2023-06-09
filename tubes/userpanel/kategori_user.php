<?php 
  require "../inc/koneksi.php";


  $queryKategori = mysqli_query($conn, "SELECT * FROM Kategori");
  $jumlahKategori =mysqli_num_rows($queryKategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

  <Style>
    .no-decoration{
      text-decoration: none;
    }
  </Style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item me-4">
          <a class="nav-link" href="../index.php">Beranda</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="userpanel.php">Home</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="kategori_user.php">Kategori</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="artikel_user.php">Artikel</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="logout_user.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  
  <div class="container mt-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <a href="../adminpanel" class="no-decoration text-muted">
            <i class="fas fa-home"></i> Home
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Kategori
        </li>
      </ol>
    </nav>

    <div class="my-5 col-12 col-md-6">
      <h3>Kategori</h3>
    </div>

    <div class="mt-3">
      <h2>List Kategori</h2>

      <div class="table-resvonsive mt-5">
        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
            </tr>
          </thead>
          <tbody>
            <?php  
              if($jumlahKategori==0){
            ?>
            <tr>
              <td colspan="3" class="text-center">Data Kategori tidak tersedia</td>
            </tr>
            <?php 
              }else{
                $jumlah = 1;
                while($data = mysqli_fetch_array($queryKategori)){
            ?>
              <tr>
                <td><?php echo $jumlah; ?></td>
                <td><?php echo $data["nama"]; ?></td>
              </tr>
            <?php
                $jumlah++;
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

