<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_students_abuse = $_POST['no_students_abuse'];
        $no_student_abuse_partner = $_POST['no_student_abuse_partner'];
        $no_students_abuse_otherpeople = $_POST['no_students_abuse_otherpeople'];
        $no_students_reported = $_POST['no_students_reported'];
        $no_students_confide = $_POST['no_students_confide'];
        

        $update_query = "UPDATE `research5.7.6.1`
        SET no_students_abuse = '$no_students_abuse', no_student_abuse_partner = '$no_student_abuse_partner', no_students_abuse_otherpeople = '$no_students_abuse_otherpeople', no_students_reported = '$no_students_reported', no_students_confide = '$no_students_confide'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.7.6.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_students_abuse = $row['no_students_abuse'];
            $no_student_abuse_partner = $row['no_student_abuse_partner'];
            $no_students_abuse_otherpeople = $row['no_students_abuse_otherpeople'];
            $no_students_reported = $row['no_students_reported'];
            $no_students_confide = $row['no_students_confide'];
            

?>
<div class=" w-100 h-auto" id="research5761" style="display: block;">
                        <h2 class="text-center pb-4">Students</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_students_abuse" value="<?php echo "$no_students_abuse"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_student_abuse_partner" value="<?php echo "$no_student_abuse_partner"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_students_abuse_otherpeople" value="<?php echo "$no_students_abuse_otherpeople"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_students_reported" value="<?php echo "$no_students_reported"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_students_confide" value="<?php echo "$no_students_confide"?>">
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