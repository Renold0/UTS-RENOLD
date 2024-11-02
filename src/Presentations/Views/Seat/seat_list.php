<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Kursi</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Kursi</h1>
    <a href="../../Handlers/Seat/seat_create.php">Tambah Kursi Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kursi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($seatList as $seat): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $seat['nama_seat'] ?></td>
                    <td>
                        <a href="../../Handlers/Seat/seat_edit.php?id=<?= $seat['idseat'] ?>">Edit</a> |
                        <a href="../../Handlers/Seat/seat_delete.php?id=<?= $seat['idseat'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>