<?php
require_once '../models/Enrollment.php';
require_once '../config/database.php';

class EnrollmentController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Enrollment($db);
    }

    public function index() {
        $result = $this->model->read();
        $students = $this->model->getStudents();
        $courses = $this->model->getCourses();
        require_once '../views/enrollments/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->student_id = $_POST['student_id'];
            $this->model->course_id = $_POST['course_id'];
            $this->model->enrollment_date = $_POST['enrollment_date'];
            
            if ($this->model->create()) {
                header("Location: index.php?action=enrollments");
                exit;
            }
        }
        $students = $this->model->getStudents();
        $courses = $this->model->getCourses();
        require_once '../views/enrollments/create.php';
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id'])) {
                header("Location: index.php?action=enrollments");
                exit;
            }
            
            $this->model->id = $_GET['id'];
            $enrollment = $this->model->readOne();
            
            if (!$enrollment) {
                header("Location: index.php?action=enrollments");
                exit;
            }
            
            $students = $this->model->getStudents();
            $courses = $this->model->getCourses();
            require_once '../views/enrollments/edit.php';
        } else {
            $this->model->id = $_POST['id'];
            $this->model->student_id = $_POST['student_id'];
            $this->model->course_id = $_POST['course_id'];
            $this->model->enrollment_date = $_POST['enrollment_date'];
            
            if ($this->model->update()) {
                header("Location: index.php?action=enrollments");
                exit;
            }
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->id = $_GET['id'];
            if ($this->model->delete()) {
                header("Location: index.php?action=enrollments");
                exit;
            }
        }
    }
}
?>