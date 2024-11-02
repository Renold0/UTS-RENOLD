<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Film</h1>
    <a href="../../Handlers/Movie/movie_create.php">Tambah Film Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($movieList as $movie): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $movie['judul'] ?></td>
                    <td><?= $movie['kategori'] ?></td>
                    <td>
                        <a href="../../Handlers/Movie/movie_edit.php?id=<?= $movie['idmovie'] ?>">Edit</a> |
                        <a href="../../Handlers/Movie/movie_delete.php?id=<?= $movie['idmovie'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>