<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Film</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Update Film</h1>
    <form action="../../Handlers/Movie/movie_update.php" method="post">
        <input type="hidden" id="idmovie" name="idmovie" value="<?= $movie['idmovie'] ?>">

        <label>Nama Film:</label>
        <input type="text" id="judul" name="judul" value="<?php echo $movie['judul']; ?>" required><br>

        <label>Kategori:</label>
        <input type="text" id="kategori" name="kategori" value="<?php echo $movie['kategori']; ?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>