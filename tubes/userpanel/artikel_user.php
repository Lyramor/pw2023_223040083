<?php
require "../inc/koneksi.php";
require "../inc/functions.php";

// Mengambil semua artikel
$artikel = query("SELECT * FROM artikel");

// Mengambil data artikel dengan kategori yang terkait
$query = mysqli_query($conn, "SELECT a.*, b.nama AS nama_kategori FROM artikel a JOIN kategori b ON a.kategori_id=b.id");

// Menghitung jumlah artikel
$jumlahArtikel = mysqli_num_rows($query);

// Mengambil semua kategori
$queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikel</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <style>
    .no-decoration {
      text-decoration: none;
    }

    form div {
      margin-bottom: 10px;
    }
  </style>

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
          Artikel
        </li>
      </ol>
    </nav>

    <div class="my-5 col-12 col-md-6">
      <h3>Artikel</h3>
    </div>

    <div class="mt-3 mb-5">
      <h2>List Artikel</h2>

      <div class="table-responsive mt-5">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Isi</th>
              <th>Sinopsis</th>
              <th>Gambar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($jumlahArtikel == 0) {
            ?>
              <tr>
                <td colspan="7" class="text-center">Data Artikel tidak tersedia</td>
              </tr>
              <?php
            } else {
              $nomor = 1;
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $data['judul']; ?></td>
                  <td><?php echo $data['nama_kategori']; ?></td>
                  <td><?php echo $data['isi']; ?></td>
                  <td><?php echo $data['sinopsis']; ?></td>
                  <td><img src="../css/image/<?php echo $data['gambar']; ?>" alt="" width="120"></td>
                </tr>
              <?php
                $nomor++;
              }
            }
              ?>
          </tbody>
        </table>
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
