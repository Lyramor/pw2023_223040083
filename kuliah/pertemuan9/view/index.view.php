
    <?php require ('partials/header.php') ?>
    <?php require ('partials/nav.php') ?>

<div class="container">
    <h1>Halaman Home</h1>

    <h3>Daftar Mahassiwa</h3>
    <?php foreach($students as $student) : ?>
        <ul>
            <li>nama : <?= $student["nama"]; ?></li>
            <li>npm : <?= $student["npm"]; ?></li>
            <li>email : <?= $student["email"]; ?></li>
        </ul>
    <?php endforeach ; ?>
</div>


