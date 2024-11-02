<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Kursi</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Kursi Baru</h1>
    <form action="../../Handlers/Seat/seat_store.php" method="post">
        <label>Nama Kursi:</label>
        <input type="text" id="nama_seat" name="nama_seat" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>