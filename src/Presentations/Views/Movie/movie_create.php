<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Film</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Film Baru</h1>
    <form action="../../Handlers/Movie/movie_store.php" method="post">
        <label>Nama Film:</label>
        <input type="text" id="judul" name="judul" required><br>

        <label>Kategori:</label>
        <input type="text" id="kategori" name="kategori" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>