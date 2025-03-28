<?php

class HorlogesModel
{
        private $db;

    public function __construct()
    {
        $this->db = new Database();
        
    }

    public function getAllHorloges()
    {
        $query = "SELECT HRS.Merk
                         ,HRS.Model
                         ,HRS.Materiaal
                         ,CONCAT(HRS.Gewicht , ' KG') AS Gewicht
                         ,HRS.Releasedatum
                         ,CONCAT(HRS.Waterdichtheid , ' M') AS Waterdichtheid  
                         ,HRS.Prijs
                         FROM Horloges As HRS
                         ORDER BY HRS.Merk DESC, HRS.Gewicht ASC";

        $this->db->query($query);

        return $this->db->resultSet();

    }

    
    // public function deleteHorlogeById($id){

    //     $query = "DELETE FROM Horloges WHERE Id = :Id";

    //     $this->db->bind(':Id', $id);

    //     $this->db->query($query);

    //    return $this->db->execute();
    // }
}