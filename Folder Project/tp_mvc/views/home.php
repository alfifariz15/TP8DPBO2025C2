<?php 
$title = "Home";
require_once '../views/layouts/header.php'; 
?>

<div class="jumbotron">
    <h1 class="display-4">Welcome to Student Management System</h1>
    <p class="lead">Ini buat tampilan Home nya ya kakak asprak</p>
    <hr class="my-4">
    <p>Ini buat nambah mahasiswa, mata kuliah, dan bonus pendaftaran atau enrollments.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mahasiswa</h5>
                    <p class="card-text">Buat mengelola catatan siswa</p>
                    <a href="index.php?action=students" class="btn btn-primary">Go to Students</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mata Kuliah</h5>
                    <p class="card-text">Buat mengelola informasi mata kuliah</p>
                    <a href="index.php?action=courses" class="btn btn-primary">Go to Courses</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Enrollments</h5>
                    <p class="card-text">Buat mengelola pendaftaran siswa</p>
                    <a href="index.php?action=enrollments" class="btn btn-primary">Go to Enrollments</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../views/layouts/footer.php'; ?>