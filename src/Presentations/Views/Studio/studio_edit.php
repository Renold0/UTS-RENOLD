<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Studio</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Update Studio</h1>
    <form action="../../Handlers/Studio/studio_update.php" method="post">
        <input type="hidden" id="idstudio" name="idstudio" value="<?= $studio['idstudio'] ?>">

        <label>Nama Studio:</label>
        <input type="text" id="nama_studio" name="nama_studio" value="<?php echo $studio['nama_studio']; ?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>