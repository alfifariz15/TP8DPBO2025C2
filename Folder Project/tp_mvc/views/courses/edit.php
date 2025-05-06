<?php 
$title = "Edit Course";
require_once '../views/layouts/header.php'; 
?>

<div class="col-lg-6 m-auto">
    <form method="post" action="index.php?action=edit_course">
        <br><br>
        <div class="card">
            <div class="card-header bg-warning">
                <h1 class="text-white text-center">Update Course</h1>
            </div><br>

            <input type="hidden" name="id" value="<?php echo $course['id']; ?>">

            <label>NAMA MATA KULIAH:</label>
            <input type="text" name="course_name" value="<?php echo $course['course_name']; ?>" class="form-control"><br>

            <label>CODE MATA KULIAH:</label>
            <input type="text" name="course_code" value="<?php echo $course['course_code']; ?>" class="form-control"><br>

            <label>SKS:</label>
            <input type="number" name="credits" value="<?php echo $course['credits']; ?>" class="form-control"><br>

            <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
            <a class="btn btn-info" href="index.php?action=courses">Cancel</a><br>
        </div>
    </form>
</div>

<?php require_once '../views/layouts/footer.php'; ?>