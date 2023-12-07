<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_employees = $_POST['no_employees'];
        $academic_teaching_staff = $_POST['academic_teaching_staff'];
        $senior_staff = $_POST['senior_staff'];

        $update_query = "UPDATE `research5.4.1`
        SET no_employees = '$no_employees', academic_teaching_staff = '$academic_teaching_staff', senior_staff = '$senior_staff'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.4.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_employees = $row['no_employees'];
            $academic_teaching_staff = $row['academic_teaching_staff'];
            $senior_staff = $row['senior_staff'];
?>
<div class=" w-100 h-auto" id="research541" style="display: block;">
                        <h2 class="text-center pb-4"> Proportion of senior female academics</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_employees" value="<?php echo "$no_employees"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="academic_teaching_staff" value="<?php echo "$academic_teaching_staff"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="senior_staff" value="<?php echo "$senior_staff"?>">
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