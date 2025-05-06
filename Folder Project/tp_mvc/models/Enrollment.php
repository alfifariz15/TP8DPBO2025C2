<?php
class Enrollment {
    private $conn;
    private $table_name = "enrollments";

    public $id;
    public $student_id;
    public $course_id;
    public $enrollment_date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT e.*, s.name as student_name, c.course_name 
                  FROM " . $this->table_name . " e
                  JOIN students s ON e.student_id = s.id
                  JOIN courses c ON e.course_id = c.id";
        $result = $this->conn->query($query);
        return $result;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET student_id=?, course_id=?, enrollment_date=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iis", $this->student_id, $this->course_id, $this->enrollment_date);
        
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
                  SET student_id=?, course_id=?, enrollment_date=?
                  WHERE id=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iisi", $this->student_id, $this->course_id, $this->enrollment_date, $this->id);
        
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

    public function getStudents() {
        $query = "SELECT id, name FROM students";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getCourses() {
        $query = "SELECT id, course_name FROM courses";
        $result = $this->conn->query($query);
        return $result;
    }
}
?>