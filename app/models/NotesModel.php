<?php

class NotesModel extends Database{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getNotes()
    {
        $this->db->query('SELECT * FROM ped_notes');

        return $this->db->resultset();
    }

    public function addNotes($data){
      $this->db->query('INSERT INTO ped_notes (doc_id	,mom_id , note_topic, note_date	, note_description,note_records) 
      VALUES (:doc_id, :mom_id, :note_topic, :note_date, :note_description, :note_records)');
      // Bind values
      $this->db->bind(':doc_id', $data['doc_id']);
        $this->db->bind(':mom_id', $data['mom_id']);
        $this->db->bind(':note_topic', $data['note_topic']);
        $this->db->bind(':note_date', $data['note_date']);
        $this->db->bind(':note_description', $data['note_description']);
        $this->db->bind(':note_records', $data['note_records']);
        
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function showNotesById($ped_note_id){
      $this->db->query("SELECT * FROM ped_notes WHERE ped_note_id = :ped_note_id");
      $this->db->bind(':ped_note_id', $ped_note_id);
      $row = $this->db->single();
      return $row;
    }
}






?>
