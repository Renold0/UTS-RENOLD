<?php

namespace Adapters\Repositories;

use Entities\Ticket;
use Infrastructures\Databases\DatabaseConnection;
use PDO;

class TicketRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = DatabaseConnection::getConnection();
    }

    public function create(Ticket $ticket): bool
    {
        if (
            !$this->foreignKeyExists('jadwal', 'idjadwal', $ticket->idjadwal) ||
            !$this->foreignKeyExists('seat', 'idseat', $ticket->idseat) ||
            !$this->foreignKeyExists('price', 'idprice', $ticket->idprice)
        ) {
            return false;
        }

        $sql = "INSERT INTO ticket (idjadwal, idseat, idprice, total_price) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $ticket->idjadwal,
            $ticket->idseat,
            $ticket->idprice,
            $ticket->total_price,
        ]);
    }

    public function fetchAll(): array
    {
        $sql = "SELECT t.idticket, j.tanggal, j.jam, se.nama_seat, p.kategori, t.total_price
            FROM ticket t
            LEFT JOIN jadwal j ON t.idjadwal = j.idjadwal
            LEFT JOIN seat se ON t.idseat = se.idseat
            LEFT JOIN price p ON t.idprice = p.idprice";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchById(int $idticket): array
    {
        $sql = "SELECT t.idticket, j.idjadwal, se.idseat, p.idprice, j.tanggal, j.jam, se.nama_seat, p.kategori, t.total_price
            FROM ticket t
            LEFT JOIN jadwal j ON t.idjadwal = j.idjadwal
            LEFT JOIN seat se ON t.idseat = se.idseat
            LEFT JOIN price p ON t.idprice = p.idprice
            WHERE t.idticket = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$idticket]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Ticket $ticket): bool
    {
        $sql = "UPDATE ticket SET idjadwal = ?, idseat = ?, idprice = ?, total_price = ? WHERE idticket = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $ticket->idjadwal,
            $ticket->idseat,
            $ticket->idprice,
            $ticket->total_price,
            $ticket->idticket,
        ]);
    }

    public function delete(int $idticket): bool
    {
        $sql = "DELETE FROM ticket WHERE idticket = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$idticket]);
    }

    private function foreignKeyExists(string $table, string $column, ?int $value): bool
    {
        if (is_null($value)) return true;
        $sql = "SELECT COUNT(*) FROM $table WHERE $column = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$value]);
        return $stmt->fetchColumn() > 0;
    }
}
