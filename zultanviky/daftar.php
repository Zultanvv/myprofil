<?php
include 'connect.php';

// Ambil semua komentar dari database
$sql = "SELECT * FROM komentar";
$result = mysqli_query($conn, $sql);

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
    <title>Daftar Komentar</title>

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
                    <li class="nav_link"><a href="tambah.php">Tambah Komentar</a></li>
                    <li class="nav_link"><a href="kontak.html">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2>Daftar Komentar</h2>

        <!-- Daftar komentar -->
        <div class="card">
            <div class="card-header">Daftar Komentar</div>
            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['komentar']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
