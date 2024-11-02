<?php
require_once '../../../init.php';

$idticket = $_GET['id'];
$ticket = $ticketController->getTicketById($idticket);

$jadwalList = $jadwalController->getAllJadwal();
$seatList = $seatController->getAllSeats();
$priceList = $priceController->getAllPrices();

include '../../Views/Ticket/ticket_edit.php';
