<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_starting_deg = $_POST['no_starting_deg'];
        $no_first_start_deg = $_POST['no_first_start_deg'];

        $update_query = "UPDATE `research5.2.1`
        SET no_starting_deg = '$no_starting_deg', no_first_start_deg = '$no_first_start_deg' 
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.2.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_starting_deg = $row['no_starting_deg'];
            $no_first_start_deg = $row['no_first_start_deg'];
?>
<div class=" w-100 h-auto" id="research521" style="display: block;">
                        <h2 class="text-center pb-4"> Proportions of First-Generation Female Students</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_starting_deg" value="<?php echo "$no_starting_deg"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_first_start_deg" value="<?php echo "$no_first_start_deg"?>">
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