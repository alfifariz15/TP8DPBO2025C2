<?php
require_once '../config/database.php';
require_once '../controllers/StudentController.php';
require_once '../controllers/CourseController.php';
require_once '../controllers/EnrollmentController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    // Student Routes
    case 'students':
        $controller = new StudentController();
        $controller->index();
        break;
    case 'create_student':
        $controller = new StudentController();
        $controller->create();
        break;
    case 'edit_student':
        $controller = new StudentController();
        $controller->edit();
        break;
    case 'delete_student':
        $controller = new StudentController();
        $controller->delete();
        break;
    
    // Course Routes
    case 'courses':
        $controller = new CourseController();
        $controller->index();
        break;
    case 'create_course':
        $controller = new CourseController();
        $controller->create();
        break;
    case 'edit_course':
        $controller = new CourseController();
        $controller->edit();
        break;
    case 'delete_course':
        $controller = new CourseController();
        $controller->delete();
        break;
    
    // Enrollment Routes
    case 'enrollments':
        $controller = new EnrollmentController();
        $controller->index();
        break;
    case 'create_enrollment':
        $controller = new EnrollmentController();
        $controller->create();
        break;
    case 'edit_enrollment':
        $controller = new EnrollmentController();
        $controller->edit();
        break;
    case 'delete_enrollment':
        $controller = new EnrollmentController();
        $controller->delete();
        break;
    
    // Home Page
    default:
        include '../views/home.php';
        break;
}
?>