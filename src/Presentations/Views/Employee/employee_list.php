<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>
    <a href="../../Views/main_menu.php">Kembali</a>
    <h1>Daftar Pegawai</h1>
    <a href="../../Handlers/Employee/employee_create.php">Tambah Pegawai Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($employeeList as $employee): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $employee['employee_name'] ?></td>
                    <td>
                        <a href="../../Handlers/Employee/employee_edit.php?id=<?= $employee['idemployee'] ?>">Edit</a> |
                        <a href="../../Handlers/Employee/employee_delete.php?id=<?= $employee['idemployee'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>