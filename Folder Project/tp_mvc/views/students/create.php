<?php 
$title = "Create Student";
require_once '../views/layouts/header.php'; 
?>

<div class="col-lg-6 m-auto">
    <form method="post" action="index.php?action=create_student">
        <br><br>
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Create Mahasiswa</h1>
            </div><br>

            <label>NAMA:</label>
            <input type="text" name="name" class="form-control" required><br>

            <label>NIM:</label>
            <input type="text" name="nim" class="form-control" required><br>

            <label>NO HP:</label>
            <input type="text" name="phone" class="form-control" required><br>

            <label>EMAIL:</label>
            <input type="email" name="email" class="form-control" required><br>

            <label>JURUSAN:</label>
            <input type="text" name="major" class="form-control" required><br>

            <label>TANGGAL BERGABUNG:</label>
            <input type="date" name="join_date" class="form-control" required><br>

            <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
            <a class="btn btn-info" href="index.php?action=students">Cancel</a><br>
        </div>
    </form>
</div>

<?php require_once '../views/layouts/footer.php'; ?>