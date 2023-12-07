<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_solo_employees = $_POST['no_solo_employees'];
        $no_solo_solo = $_POST['no_solo_solo'];
        $no_solo_students = $_POST['no_solo_students'];
        $no_solostudents_solo = $_POST['no_solostudents_solo'];
        $no_solo_parents = $_POST['no_solo_parents'];
        $no_employees_children_soloparent = $_POST['no_employees_children_soloparent'];
        $total_num_student_soloparents = $_POST['total_num_student_soloparents'];

        $update_query = "UPDATE `research5.6.5`
        SET no_solo_employees = '$no_solo_employees', no_solo_solo = '$no_solo_solo', no_solo_students = '$no_solo_students', no_solostudents_solo = '$no_solostudents_solo', no_solo_parents = '$no_solo_parents', no_employees_children_soloparent = '$no_employees_children_soloparent', total_num_student_soloparents = '$total_num_student_soloparents'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.6.5` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_solo_employees = $row['no_solo_employees'];
            $no_solo_solo = $row['no_solo_solo'];
            $no_solo_students = $row['no_solo_students'];
            $no_solostudents_solo = $row['no_solostudents_solo'];
            $no_solo_parents = $row['no_solo_parents'];
            $no_employees_children_soloparent = $row['no_employees_children_soloparent'];
            $total_num_student_soloparents = $row['total_num_student_soloparents'];

?>
<div class=" w-100 h-auto" id="research565" style="display: block;">
                        <h2 class="text-center pb-4">Solo parent</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_solo_employees" value="<?php echo "$no_solo_employees"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_solo_solo" value="<?php echo "$no_solo_solo"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_solo_students" value="<?php echo "$no_solo_students"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_solostudents_solo" value="<?php echo "$no_solostudents_solo"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_solo_parents" value="<?php echo "$no_solo_parents"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_employees_children_soloparent" value="<?php echo "$no_employees_children_soloparent"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_num_student_soloparents" value="<?php echo "$total_num_student_soloparents"?>">
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