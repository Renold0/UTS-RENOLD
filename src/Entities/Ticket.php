<?php

namespace Entities;

class Ticket
{
    public int $idticket;
    public ?int $idjadwal;
    public ?int $idseat;
    public ?int $idprice;
    public ?float $total_price;
}
