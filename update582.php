<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $total_GAD_fund_utilized = $_POST['total_GAD_fund_utilized'];
        

        $update_query = "UPDATE `research5.8.2`
        SET total_GAD_fund_utilized = '$total_GAD_fund_utilized'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.8.2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $total_GAD_fund_utilized = $row['total_GAD_fund_utilized'];
            
?>
<div class=" w-100 h-auto" id="research582" style="display: block;">
                        <h2 class="text-center pb-4"> GAD Accomplishment Report</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="total_GAD_fund_utilized" value="<?php echo "$total_GAD_fund_utilized"?>">
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