<?php require_once '../views/layouts/header.php'; ?>

<div class="col-1 my-3">
    <a href="index.php?action=create_course" class="btn btn-primary">Add New Course</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>MATA KULIAH</th>
            <th>CODE MATA KULIAH</th>
            <th>SKS</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['course_name']; ?></td>
            <td><?php echo $row['course_code']; ?></td>
            <td><?php echo $row['credits']; ?></td>
            <td>
                <a href="index.php?action=edit_course&id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                <a href="index.php?action=delete_course&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php require_once '../views/layouts/footer.php'; ?>