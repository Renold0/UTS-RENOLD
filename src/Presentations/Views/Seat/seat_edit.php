<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Kursi</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Update Kursi</h1>
    <form action="../../Handlers/Seat/seat_update.php" method="post">
        <input type="hidden" id="idseat" name="idseat" value="<?= $seat['idseat'] ?>">

        <label>Nama Kursi:</label>
        <input type="text" id="nama_seat" name="nama_seat" value="<?php echo $seat['nama_seat']; ?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>