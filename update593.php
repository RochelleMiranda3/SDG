<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_GAD_IEC = $_POST['no_GAD_IEC'];
        $total_cost = $_POST['total_cost'];
        $no_IEC_materials = $_POST['no_IEC_materials'];

        $update_query = "UPDATE `research5.9.3`
        SET no_GAD_IEC = '$no_GAD_IEC', total_cost = '$total_cost', no_IEC_materials = '$no_IEC_materials'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.9.3` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_GAD_IEC = $row['no_GAD_IEC'];
            $total_cost = $row['total_cost'];
            $no_IEC_materials = $row['no_IEC_materials'];
?>
<div class=" w-100 h-auto" id="research593" style="display: block;">
                        <h2 class="text-center pb-4"> GAD IEC Materials</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_GAD_IEC" value="<?php echo "$no_GAD_IEC"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_cost" value="<?php echo "$total_cost"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_IEC_materials" value="<?php echo "$no_IEC_materials"?>">
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