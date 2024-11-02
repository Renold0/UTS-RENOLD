<?php
require_once '../../../init.php';

$data = [
    'idjadwal' => $_POST['idjadwal'],
    'idseat' => $_POST['idseat'],
    'idprice' => $_POST['idprice'],
    'total_price' => $_POST['total_price'],
];

if ($ticketController->createTicket($data)) {
    header("Location: ticket_list.php");
} else {
    echo "Gagal menambahkan tiket.";
}
