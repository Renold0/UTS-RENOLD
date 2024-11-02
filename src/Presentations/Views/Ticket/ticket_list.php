<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Tiket</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Tiket</h1>
    <a href="../../Handlers/Ticket/ticket_create.php">Tambah Tiket Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jadwal</th>
                <th>Seat</th>
                <th>Kategori Harga</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($ticketList as $ticket): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ticket['tanggal'] ?> - <?= $ticket['jam'] ?></td>
                    <td><?= $ticket['nama_seat'] ?></td>
                    <td><?= $ticket['kategori'] ?></td>
                    <td><?= $ticket['total_price'] ?></td>
                    <td>
                        <a href="../../Handlers/Ticket/ticket_edit.php?id=<?= $ticket['idticket'] ?>">Edit</a> |
                        <a href="../../Handlers/Ticket/ticket_delete.php?id=<?= $ticket['idticket'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>