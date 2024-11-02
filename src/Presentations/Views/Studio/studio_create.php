<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Studio</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Studio Baru</h1>
    <form action="../../Handlers/Studio/studio_store.php" method="post">
        <label>Nama Studio:</label>
        <input type="text" id="nama_studio" name="nama_studio" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>