<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Studio</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Studio</h1>
    <a href="../../Handlers/Studio/studio_create.php">Tambah Studio Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Studio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($studioList as $studio): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $studio['nama_studio'] ?></td>
                    <td>
                        <a href="../../Handlers/Studio/studio_edit.php?id=<?= $studio['idstudio'] ?>">Edit</a> |
                        <a href="../../Handlers/Studio/studio_delete.php?id=<?= $studio['idstudio'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>