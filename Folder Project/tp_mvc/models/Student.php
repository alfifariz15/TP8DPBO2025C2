<?php
class Student {
    private $conn;
    private $table_name = "students";

    public $id;
    public $name;
    public $nim;
    public $phone;
    public $join_date;
    public $email;
    public $major;

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
                SET name=?, nim=?, phone=?, email=?, major=?, join_date=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssss", $this->name, $this->nim, $this->phone, $this->email, $this->major, $this->join_date);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                SET name=?, nim=?, phone=?, email=?, major=?, join_date=?
                WHERE id=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssi", $this->name, $this->nim, $this->phone, $this->email, $this->major, $this->join_date, $this->id);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>