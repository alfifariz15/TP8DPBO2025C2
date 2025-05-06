<?php
require_once '../models/Student.php';
require_once '../config/database.php';

class StudentController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Student($db);
    }

    public function index() {
        $result = $this->model->read();
        require_once '../views/students/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->name = $_POST['name'];
            $this->model->nim = $_POST['nim'];
            $this->model->phone = $_POST['phone'];
            $this->model->join_date = $_POST['join_date'];
            
            if ($this->model->create()) {
                header("Location: index.php?action=students");
                exit;
            }
        }
        require_once '../views/students/create.php';
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id'])) {
                header("Location: index.php");
                exit;
            }
            
            $this->model->id = $_GET['id'];
            $student = $this->model->readOne();
            
            if (!$student) {
                header("Location: index.php");
                exit;
            }
            
            require_once '../views/students/edit.php';
        } else {
            $this->model->id = $_POST['id'];
            $this->model->name = $_POST['name'];
            $this->model->nim = $_POST['nim'];
            $this->model->phone = $_POST['phone'];
            $this->model->join_date = $_POST['join_date'];
            
            if ($this->model->update()) {
                header("Location: index.php?action=students");
                exit;
            }
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->id = $_GET['id'];
            if ($this->model->delete()) {
                header("Location: index.php?action=students");
                exit;
            }
        }
    }
}
?>