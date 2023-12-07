<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $total_campus_GAA = $_POST['total_campus_GAA'];
        $total_GAA = $_POST['total_GAA'];
        $total_GAD_fund = $_POST['total_GAD_fund'];

        $update_query = "UPDATE `research5.8.1`
        SET total_campus_GAA = '$total_campus_GAA', total_GAA = '$total_GAA', total_GAD_fund = '$total_GAD_fund'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.8.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $total_campus_GAA = $row['total_campus_GAA'];
            $total_GAA = $row['total_GAA'];
            $total_GAD_fund = $row['total_GAD_fund'];
?>
<div class=" w-100 h-auto" id="research581" style="display: block;">
                        <h2 class="text-center pb-4"> GAD Plan and Budget</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="total_campus_GAA" value="<?php echo "$total_campus_GAA"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_GAA" value="<?php echo "$total_GAA"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_GAD_fund" value="<?php echo "$total_GAD_fund"?>">
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