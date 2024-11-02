<?php
require_once '../../../init.php';

$jadwalList = $jadwalController->getAllJadwal();
$seatList = $seatController->getAllSeats();
$priceList = $priceController->getAllPrices();

include '../../Views/Ticket/ticket_create.php';
