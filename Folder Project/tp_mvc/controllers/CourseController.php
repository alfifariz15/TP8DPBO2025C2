<?php
require_once '../models/Course.php';
require_once '../config/database.php';

class CourseController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Course($db);
    }

    public function index() {
        $result = $this->model->read();
        require_once '../views/courses/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->course_name = $_POST['course_name'];
            $this->model->course_code = $_POST['course_code'];
            $this->model->credits = $_POST['credits'];
            
            if ($this->model->create()) {
                header("Location: index.php?action=courses");
                exit;
            } else {
                $error = "Failed to create course";
                require_once '../views/courses/create.php';
            }
        } else {
            require_once '../views/courses/create.php';
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id'])) {
                header("Location: index.php?action=courses");
                exit;
            }
            
            $this->model->id = $_GET['id'];
            $course = $this->model->readOne();
            
            if (!$course) {
                header("Location: index.php?action=courses");
                exit;
            }
            
            require_once '../views/courses/edit.php';
        } else {
            $this->model->id = $_POST['id'];
            $this->model->course_name = $_POST['course_name'];
            $this->model->course_code = $_POST['course_code'];
            $this->model->credits = $_POST['credits'];
            
            if ($this->model->update()) {
                header("Location: index.php?action=courses");
                exit;
            } else {
                // Tambahkan error handling jika diperlukan
                $error = "Failed to update course";
                $course = $this->model->readOne();
                require_once '../views/courses/edit.php';
            }
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->id = $_GET['id'];
            if ($this->model->delete()) {
                header("Location: index.php?action=courses");
                exit;
            } else {
                // Tambahkan error handling jika diperlukan
                die("Failed to delete course");
            }
        }
        header("Location: index.php?action=courses");
        exit;
    }
}
?>