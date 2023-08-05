<?php
include 'connect.php';

// Fungsi tambah komentar
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO komentar (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success"><strong>Sukses!</strong> Komentar berhasil ditambahkan.</div>';
    } else {
        echo '<div class="alert alert-danger"><strong>Error!</strong> ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Title -->
    <title>Tambah Komentar</title>

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>
        <nav>
            <div class="header_links">
                <ul class="nav_links">
                    <li class="nav_link"><a href="index.html">Home</a></li>
                    <li class="nav_link"><a href="about.html">Tentang Saya</a></li>
                    <li class="nav_link"><a href="daftar.php">Daftar Komentar</a></li>
                    <li class="nav_link"><a href="kontak.html">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2>Formulir Komentar</h2>

        <!-- Form tambah komentar -->
        <div class="card mb-4">
            <div class="card-header">Tambah Komentar</div>
            <div class="card-body">

                <form method="POST" action="tambah.php">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="komentar">Komentar:</label>
                        <textarea class="form-control" id="komentar" name="komentar" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
