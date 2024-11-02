<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Tiket</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Tiket Baru</h1>
    <form action="../../Handlers/Ticket/ticket_store.php" method="post">
        <label>Jadwal:</label>
        <select id="idjadwal" name="idjadwal" required>
            <?php foreach ($jadwalList as $jadwal): ?>
                <option value="<?= $jadwal['idjadwal'] ?>">
                    <?= $jadwal['tanggal'] ?> <?= $jadwal['jam'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>Seat:</label>
        <select id="idseat" name="idseat" required>
            <?php foreach ($seatList as $seat): ?>
                <option value="<?= $seat['idseat'] ?>">
                    <?= $seat['nama_seat'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>kategori Harga:</label>
        <select id="idprice" name="idprice" required>
            <?php foreach ($priceList as $price): ?>
                <option value="<?= $price['idprice'] ?>">
                    <?= $price['kategori'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>Total Harga:</label>
        <input type="number" step="0.01" id="total_price" name="total_price" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>