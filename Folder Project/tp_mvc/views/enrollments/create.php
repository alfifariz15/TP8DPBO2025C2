<?php 
$title = "Create Enrollment";
require_once '../views/layouts/header.php'; 
?>

<div class="col-lg-6 m-auto">
    <form method="post" action="index.php?action=create_enrollment">
        <br><br>
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Create Enrollment</h1>
            </div><br>

            <label>MAHASISWA:</label>
            <select name="student_id" class="form-control" required>
                <option value="">Select Student</option>
                <?php while ($student = $students->fetch_assoc()): ?>
                <option value="<?php echo $student['id']; ?>"><?php echo $student['name']; ?></option>
                <?php endwhile; ?>
            </select><br>

            <label>MATA KULIAH:</label>
            <select name="course_id" class="form-control" required>
                <option value="">Select Course</option>
                <?php while ($course = $courses->fetch_assoc()): ?>
                <option value="<?php echo $course['id']; ?>"><?php echo $course['course_name']; ?></option>
                <?php endwhile; ?>
            </select><br>

            <label>TANGGAL PENDAFTARAN:</label>
            <input type="date" name="enrollment_date" class="form-control" required><br>

            <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
            <a class="btn btn-info" href="index.php?action=enrollments">Cancel</a><br>
        </div>
    </form>
</div>

<?php require_once '../views/layouts/footer.php'; ?>