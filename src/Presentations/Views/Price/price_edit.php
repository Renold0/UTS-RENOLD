<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Harga</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Update Harga</h1>
    <form action="../../Handlers/Price/price_update.php" method="post">
        <input type="hidden" id="idprice" name="idprice" value="<?= $price['idprice'] ?>">

        <label>Kategori:</label>
        <input type="text" id="kategori" name="kategori" value="<?php echo $price['kategori']; ?>" required><br>

        <label>Total Harga:</label>
        <input type="text" id="total_price" name="total_price" value="<?php echo $price['total_price']; ?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>