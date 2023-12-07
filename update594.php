<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_purchased_GAD = $_POST['no_purchased_GAD'];
        $no_GAD_related_esource = $_POST['no_GAD_related_esource'];
        $total_amount_utilized = $_POST['total_amount_utilized'];

        $update_query = "UPDATE `research5.9.4`
        SET no_purchased_GAD = '$no_purchased_GAD', no_GAD_related_esource = '$no_GAD_related_esource', total_amount_utilized = '$total_amount_utilized'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.9.4` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_purchased_GAD = $row['no_purchased_GAD'];
            $no_GAD_related_esource = $row['no_GAD_related_esource'];
            $total_amount_utilized = $row['total_amount_utilized'];
?>
<div class=" w-100 h-auto" id="research594" style="display: block;">
                        <h2 class="text-center pb-4"> Library Resources</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_purchased_GAD" value="<?php echo "$no_purchased_GAD"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_GAD_related_esource" value="<?php echo "$no_GAD_related_esource"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_amount_utilized" value="<?php echo "$total_amount_utilized"?>">
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