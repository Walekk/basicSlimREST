<?php
class QuestionsMapper extends Mapper {
    public function getTickets() {
        $sql = "SELECT t.id, t.description, t.correctAnswear
            from tickets t
            join components c on (c.id = t.component_id)";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new TicketEntity($row);
        }
        return $results;
    }
}