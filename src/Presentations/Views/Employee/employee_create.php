<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Tambah Pegawai Baru</h1>
    <form action="../../Handlers/Employee/employee_store.php" method="post">
        <label>Nama Pegawai:</label>
        <input type="text" id="employee_name" name="employee_name" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>