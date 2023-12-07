<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_job_applicants = $_POST['no_job_applicants'];
        $no_newly_hired = $_POST['no_newly_hired'];
        

        $update_query = "UPDATE `research5.3.2`
        SET no_job_applicants = '$no_job_applicants', no_newly_hired = '$no_newly_hired'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.3.2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_job_applicants = $row['no_job_applicants'];
            $no_newly_hired = $row['no_newly_hired'];
            
?>
<div class=" w-100 h-auto" id="research532" style="display: block;">
                        <h2 class="text-center pb-4">Tracking access measures for employees</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_job_applicants" value="<?php echo "$no_job_applicants"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_newly_hired" value="<?php echo "$no_newly_hired"?>">
                            </div>
                           
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update</button>
                            </div>
                        </form>
                    </div>
        </div>
<?php
        }
    }
}
?>