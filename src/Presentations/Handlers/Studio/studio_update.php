<?php
require_once '../../../init.php';

$data = [
    'idstudio' => $_POST['idstudio'],
    'nama_studio' => $_POST['nama_studio'],
];

if ($studioController->updateStudio($data)) {
    header("Location: studio_list.php");
} else {
    echo "Gagal memperbarui studio.";
}
