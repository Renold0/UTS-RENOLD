<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Tiket</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Update Tiket</h1>
    <form action="../../Handlers/Ticket/ticket_update.php" method="post">
        <input type="hidden" id="idticket" name="idticket" value="<?= $ticket['idticket'] ?>">

        <label>ID Jadwal:</label>
        <select id="idjadwal" name="idjadwal" required>
            <?php foreach ($jadwalList as $jadwal): ?>
                <option value="<?= $jadwal['idjadwal'] ?>" <?= $jadwal['idjadwal'] == $ticket['idjadwal'] ? 'selected' : '' ?>>
                    <?= $jadwal['tanggal'] ?> - <?= $jadwal['jam'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>ID Seat:</label>
        <select id="idseat" name="idseat" required>
            <?php foreach ($seatList as $seat): ?>
                <option value="<?= $seat['idseat'] ?>" <?= $seat['idseat'] == $ticket['idseat'] ? 'selected' : '' ?>>
                    <?= $seat['nama_seat'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>ID Price:</label>
        <select id="idprice" name="idprice" required>
            <?php foreach ($priceList as $price): ?>
                <option value="<?= $price['idprice'] ?>" <?= $price['idprice'] == $ticket['idprice'] ? 'selected' : '' ?>>
                    <?= $price['kategori'] ?> - Rp<?= $price['total_price'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>Total Price:</label>
        <input type="number" step="0.01" id="total_price" name="total_price" value="<?= $ticket['total_price'] ?>" required><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>