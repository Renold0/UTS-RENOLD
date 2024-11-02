<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Jadwal</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Jadwal</h1>
    <a href="../../Handlers/Jadwal/jadwal_create.php">Tambah Jadwal Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Studio</th>
                <th>Movie</th>
                <th>Employee</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($jadwalList as $jadwal): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $jadwal['tanggal'] ?></td>
                    <td><?= $jadwal['jam'] ?></td>
                    <td><?= $jadwal['nama_studio'] ?></td>
                    <td><?= $jadwal['judul'] ?></td>
                    <td><?= $jadwal['employee_name'] ?></td>
                    <td>
                        <a href="../../Handlers/Jadwal/jadwal_edit.php?id=<?= $jadwal['idjadwal'] ?>">Edit</a> |
                        <a href="../../Handlers/Jadwal/jadwal_delete.php?id=<?= $jadwal['idjadwal'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>