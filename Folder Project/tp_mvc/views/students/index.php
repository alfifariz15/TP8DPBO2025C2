<?php require_once '../views/layouts/header.php'; ?>

<div class="col-1 my-3">
    <a href="index.php?action=create_student" class="btn btn-primary">Add New</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>NO HP</th>
            <th>TANGGAL BERGABUNG</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['join_date']; ?></td>
            <td>
                <a href="index.php?action=edit_student&id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                <a href="index.php?action=delete_student&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php require_once '../views/layouts/footer.php'; ?>