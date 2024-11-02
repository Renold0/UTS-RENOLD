<?php
require_once '../../../init.php';

$data = [
    'idticket' => $_POST['idticket'],
    'idjadwal' => $_POST['idjadwal'],
    'idseat' => $_POST['idseat'],
    'idprice' => $_POST['idprice'],
    'total_price' => $_POST['total_price'],
];

if ($ticketController->updateTicket($data)) {
    header("Location: ticket_list.php");
} else {
    echo "Gagal memperbarui tiket.";
}
