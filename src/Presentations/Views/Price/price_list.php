<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Harga</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Harga</h1>
    <a href="../../Handlers/Price/price_create.php">Tambah Harga Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($priceList as $price): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $price['kategori'] ?></td>
                    <td><?= $price['total_price'] ?></td>
                    <td>
                        <a href="../../Handlers/Price/price_edit.php?id=<?= $price['idprice'] ?>">Edit</a> |
                        <a href="../../Handlers/Price/price_delete.php?id=<?= $price['idprice'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>