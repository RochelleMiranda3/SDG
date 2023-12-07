<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $total_no_STEM = $_POST['total_no_STEM'];
        $no_graduate_medicine = $_POST['no_graduate_medicine'];
        $no_art_humanities = $_POST['no_art_humanities'];

        $update_query = "UPDATE `research5.5.3`
        SET total_no_STEM = '$total_no_STEM', no_graduate_medicine = '$no_graduate_medicine', no_art_humanities = '$no_art_humanities'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.5.3` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);    

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $total_no_STEM = $row['total_no_STEM'];
            $no_graduate_medicine = $row['no_graduate_medicine'];
            $no_art_humanities = $row['no_art_humanities'];
?>
<div class=" w-100 h-auto" id="research553" style="display: block;">
                        <h2 class="text-center pb-4"> Number of graduates by broad subject areas</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="total_no_STEM" value="<?php echo "$total_no_STEM"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_graduate_medicine" value="<?php echo "$no_graduate_medicine"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_art_humanities" value="<?php echo "$no_art_humanities"?>">
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