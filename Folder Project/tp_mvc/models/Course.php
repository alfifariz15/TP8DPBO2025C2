<?php
class Course {
    private $conn;
    private $table_name = "courses";

    public $id;
    public $course_name;
    public $course_code;
    public $credits;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($query);
        return $result;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                 SET course_name=?, course_code=?, credits=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssi", $this->course_name, $this->course_code, $this->credits);
        
        return $stmt->execute();
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                 SET course_name=?, course_code=?, credits=?
                 WHERE id=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssii", $this->course_name, $this->course_code, $this->credits, $this->id);
        
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }
}
?>