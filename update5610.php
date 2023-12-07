<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_reports_discrimination = $_POST['no_reports_discrimination'];
        $no_resolved_discrimination = $_POST['no_resolved_discrimination'];
        

        $update_query = "UPDATE `researchchange`
        SET no_reports_discrimination = '$no_reports_discrimination', no_resolved_discrimination = '$no_resolved_discrimination'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `researchchange` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_reports_discrimination = $row['no_reports_discrimination'];
            $no_resolved_discrimination = $row['no_resolved_discrimination'];
            
?>
<div class=" w-100 h-auto" id="researchchange" style="display: block;">
                        <h2 class="text-center pb-4"> Reports against discrimination</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_reports_discrimination" value="<?php echo "$no_reports_discrimination"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_resolved_discrimination" value="<?php echo "$no_resolved_discrimination"?>">
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