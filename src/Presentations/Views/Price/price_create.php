<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Harga</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Harga Baru</h1>
    <form action="../../Handlers/Price/price_store.php" method="post">
        <label>Kategori:</label>
        <input type="text" id="kategori" name="kategori" required><br>

        <label>Total Harga:</label>
        <input type="number" id="total_price" name="total_price" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>