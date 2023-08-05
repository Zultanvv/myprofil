<?php
include 'connect.php';
// Ambil ID komentar dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data komentar berdasarkan ID
    $sql = "SELECT * FROM komentar WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    // Jika parameter ID tidak tersedia, kembali ke halaman komentar
    header("Location: comment.php");
    exit();
}

// Fungsi update komentar
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "UPDATE komentar SET nama='$nama', email='$email', komentar='$komentar' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success"><strong>Success!</strong> Komentar berhasil diupdate.</div>';
    } else {
        echo '<div class="alert alert-danger"><strong>Error!</strong> ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
    }
    
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Komentar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Komentar</h1>

        <!-- Form edit komentar -->
        <div class="card">
            <div class="card-body">
            <div id="alertContainer"></div>
                <form method="POST" action="edit-comment.php?id=<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" 
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="komentar">Komentar:</label>
                        <textarea class="form-control" id="komentar" name="komentar" required><?php echo $row['komentar']; ?></textarea>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <a href="comment.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
