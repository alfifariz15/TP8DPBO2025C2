<?php 
$title = "Create Course";
require_once '../views/layouts/header.php'; 
?>

<div class="col-lg-6 m-auto">
    <form method="post" action="index.php?action=create_course">
        <br><br>
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Create Course</h1>
            </div><br>

            <label>NAMA MATA KULIAH:</label>
            <input type="text" name="course_name" class="form-control" required><br>

            <label>CODE MATA KULIAH:</label>
            <input type="text" name="course_code" class="form-control" required><br>

            <label>SKS:</label>
            <input type="number" name="credits" class="form-control" required><br>

            <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
            <a class="btn btn-info" href="index.php?action=courses">Cancel</a><br>
        </div>
    </form>
</div>

<?php require_once '../views/layouts/footer.php'; ?>