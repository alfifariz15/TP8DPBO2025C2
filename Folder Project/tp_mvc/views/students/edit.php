<?php 
$title = "Edit Student";
require_once '../views/layouts/header.php'; 
?>

<div class="col-lg-6 m-auto">
    <form method="post" action="index.php?action=edit_student">
        <br><br>
        <div class="card">
            <div class="card-header bg-warning">
                <h1 class="text-white text-center">Update Student</h1>
            </div><br>

            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

            <label>NAMA:</label>
            <input type="text" name="name" value="<?php echo $student['name']; ?>" class="form-control"><br>

            <label>NIM:</label>
            <input type="text" name="nim" value="<?php echo $student['nim']; ?>" class="form-control"><br>

            <label>NO HP:</label>
            <input type="text" name="phone" value="<?php echo $student['phone']; ?>" class="form-control"><br>

            <label>EMAIL:</label>
            <input type="email" name="email" value="<?php echo $student['email']; ?>" class="form-control"><br>

            <label>JURUSAN:</label>
            <input type="text" name="major" value="<?php echo $student['major']; ?>" class="form-control"><br>

            <label>TANGGAL BERGABUNG:</label>
            <input type="date" name="join_date" value="<?php echo $student['join_date']; ?>" class="form-control"><br>

            <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
            <a class="btn btn-info" href="index.php?action=students">Cancel</a><br>
        </div>
    </form>
</div>

<?php require_once '../views/layouts/footer.php'; ?>