<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Pegawai</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <h1>Update Pegawai</h1>
    <form action="../../Handlers/Employee/employee_update.php" method="post">
        <input type="hidden" id="idemployee" name="idemployee" value="<?= $employee['idemployee'] ?>">

        <label>Nama Pegawai:</label>
        <input type="text" id="employee_name" name="employee_name" value="<?php echo $employee['employee_name']; ?>" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>