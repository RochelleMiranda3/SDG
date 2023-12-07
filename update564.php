<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_paternity = $_POST['no_paternity'];
        $no_equi_paternity = $_POST['no_equi_paternity'];
        $no_maternity_leave = $_POST['no_maternity_leave'];
        $no_equi_maternity = $_POST['no_equi_maternity'];
        $no_solo_parents = $_POST['no_solo_parents'];
        $no_equi_solo_parents = $_POST['no_equi_solo_parents'];
        $no_equi_solo_parents = $_POST['total_num_VAWC'];
        $no_equi_solo_parents = $_POST['total_equi_VAWC'];
        $no_equi_solo_parents = $_POST['no_special'];
        $no_equi_solo_parents = $_POST['equi_special'];
        

        $update_query = "UPDATE `research5.6.4`
        SET no_paternity = '$no_paternity', no_equi_paternity = '$no_equi_paternity', no_maternity_leave = '$no_maternity_leave', no_equi_maternity = '$no_equi_maternity', no_solo_parents = '$no_solo_parents'
        , no_equi_solo_parents = '$no_equi_solo_parents', total_num_VAWC = '$total_num_VAWC', total_equi_VAWC = '$total_equi_VAWC', no_special = '$no_special', equi_special = '$equi_special'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.6.4` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_paternity = $row['no_paternity'];
            $no_equi_paternity = $row['no_equi_paternity'];
            $no_maternity_leave = $row['no_maternity_leave'];
            $no_equi_maternity = $row['no_equi_maternity'];
            $no_solo_parents = $row['no_solo_parents'];
            $no_equi_solo_parents = $row['no_equi_solo_parents'];
            $total_num_VAWC = $row['total_num_VAWC'];
            $total_equi_VAWC = $row['total_equi_VAWC'];
            $no_special = $row['no_special'];
            $equi_special = $row['equi_special'];

?>
<div class=" w-100 h-auto" id="research564" style="display: block;">
                        <h2 class="text-center pb-4">Leave privileges of employees</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_paternity" value="<?php echo "$no_paternity"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_equi_paternity" value="<?php echo "$no_equi_paternity"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_maternity_leave" value="<?php echo "$no_maternity_leave"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_equi_maternity" value="<?php echo "$no_equi_maternity"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_solo_parents" value="<?php echo "$no_solo_parents"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_equi_solo_parents" value="<?php echo "$no_equi_solo_parents"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_num_VAWC" value="<?php echo "$total_num_VAWC"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_equi_VAWC" value="<?php echo "$total_equi_VAWC"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_special" value="<?php echo "$no_special"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="equi_special" value="<?php echo "$equi_special"?>">
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