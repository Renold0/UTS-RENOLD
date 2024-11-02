<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Jadwal</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Jadwal Baru</h1>
    <form action="../../Handlers/Jadwal/jadwal_store.php" method="post">
        <label>Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required><br>

        <label>Jam:</label>
        <input type="time" id="jam" name="jam" required><br>

        <label>Studio:</label>
        <select id="idstudio" name="idstudio" required>
            <?php foreach ($studioList as $studio): ?>
                <option value="<?= $studio['idstudio'] ?>">
                    <?= $studio['nama_studio'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>Movie:</label>
        <select id="idmovie" name="idmovie" required>
            <?php foreach ($movieList as $movie): ?>
                <option value="<?= $movie['idmovie'] ?>">
                    <?= $movie['judul'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>Employee:</label>
        <select id="idemployee" name="idemployee" required>
            <?php foreach ($employeeList as $employee): ?>
                <option value="<?= $employee['idemployee'] ?>">
                    <?= $employee['employee_name'] ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>