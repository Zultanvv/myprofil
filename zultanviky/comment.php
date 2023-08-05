<?php
include 'connect.php';
// Fungsi tambah komentar
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO komentar (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
    if (mysqli_query($conn, $sql)) {
        echo '<script>
        var alertSuccess = \'<div class="alert alert-success"><strong>Sukses!</strong> Komentar berhasil ditambahkan.</div>\';
        document.getElementById("alertContainer").innerHTML = alertSuccess;
    </script>';
} else {
    echo '<script>
        var alertError = \'<div class="alert alert-danger"><strong>Error!</strong> ' . $sql . '<br>' . mysqli_error($conn) . '</div>\';
        document.getElementById("alertContainer").innerHTML = alertError;
    </script>';
}
    }

// Fungsi edit komentar
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "UPDATE komentar SET nama='$nama', email='$email', komentar='$komentar' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Komentar berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fungsi hapus komentar
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM komentar WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Komentar berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Title -->
    <title>Zultan</title>

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card-body td {
            color: black;
        }
    </style>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">

</head>

<body>

    <header>
        <nav>
            <!-- <div class="header_logo">
                <img src="img/Zultan.jpeg" alt="" srcset="">
            </div> -->
            <div class="header_links">
                <ul class="nav_links">
                    <li class="nav_link"><a href="index.html">Home</a></li>
                    <li class="nav_link"><a href="about.html">Tentang Saya</a></li>
                    <li class="nav_link"><a href="comment.html">Komentar</a></li>
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
            
                <form method="POST" action="comment.html">
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

        <!-- Daftar komentar -->
        <div class="card">
            <div class="card-header">Daftar Komentar</div>
            <div class="card-body">
            <div id="alertContainer"></div>
                <table class="table table-striped" id="commentTable">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Komentar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['komentar']; ?></td>
                                <td>
                                    <a href="edit-comment.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="comment.php?delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="main">
            <ul>
                <li><a target="_blank" href="https://www.linkedin.com/in/zultan-viky-s-h-598248258/"><i class="fab fa-linkedin"></i></a></li>
                <li><a target="_blank" href="https://github.com/Zultanvv"><i class="fab fa-github"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/zultanvv"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $('#commentTable').DataTable();
        });
    </script>
<script>
    // Mendapatkan referensi elemen tombol hapus
   // Mendapatkan referensi elemen tombol hapus
var hapusButton = document.getElementsByClassName('btn-danger');

// Menambahkan event listener untuk meng-handle klik tombol hapus
for (var i = 0; i < hapusButton.length; i++) {
  hapusButton[i].addEventListener('click', function (event) {
    // Mencegah tindakan default dari tombol hapus
    event.preventDefault();

    // Menampilkan alert konfirmasi
    var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data?");

    // Jika pengguna menekan tombol OK, lanjutkan penghapusan data
    if (konfirmasi) {
      var id = this.getAttribute('data-id'); // Mendapatkan ID komentar dari atribut data-id
      deleteComment(id);
    }
  });
}

function deleteComment(id) {
  $.ajax({
    url: 'delete-comment.php', // Ubah sesuai dengan file yang menangani proses penghapusan komentar
    type: 'GET',
    data: { id: id },
    success: function (response) {
      // Menampilkan alert sukses
      var alertSuccess = '<div class="alert alert-success"><strong>Sukses!</strong> ' + response + '</div>';
      document.getElementById('alertContainer').innerHTML = alertSuccess;

      // Menghapus baris komentar dari tabel
      var row = document.getElementById('commentRow_' + id);
      row.parentNode.removeChild(row);
    },
    error: function (xhr, status, error) {
      // Menampilkan alert error
      var alertError = '<div class="alert alert-danger"><strong>Error!</strong> ' + error + '</div>';
      document.getElementById('alertContainer').innerHTML = alertError;
    }
  });
}

</script>
</body>
</html>