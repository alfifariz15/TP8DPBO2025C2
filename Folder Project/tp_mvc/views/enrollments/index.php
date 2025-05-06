<?php 
$title = "Enrollments";
require_once '../views/layouts/header.php'; 
?>

<div class="col-1 my-3">
    <a href="index.php?action=create_enrollment" class="btn btn-primary">Add New Enrollment</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>MAHASISWA</th>
            <th>MATA KULIAH</th>
            <th>TANGGAL PENDAFTARAN</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['course_name']; ?></td>
            <td><?php echo $row['enrollment_date']; ?></td>
            <td>
                <a href="index.php?action=edit_enrollment&id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                <a href="index.php?action=delete_enrollment&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php require_once '../views/layouts/footer.php'; ?>