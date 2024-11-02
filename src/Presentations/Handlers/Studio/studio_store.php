<?php
require_once '../../../init.php';

$data = [
    'nama_studio' => $_POST['nama_studio'],
];

if ($studioController->createStudio($data)) {
    header("Location: studio_list.php");
} else {
    echo "Gagal menambahkan studio.";
}
