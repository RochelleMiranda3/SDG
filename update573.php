<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_sexual_harrassment = $_POST['no_sexual_harrassment'];
        $no_resolved_sexual_harrassment = $_POST['no_resolved_sexual_harrassment'];
        

        $update_query = "UPDATE `research5.7.3`
        SET no_sexual_harrassment = '$no_sexual_harrassment', no_resolved_sexual_harrassment = '$no_resolved_sexual_harrassment'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.7.3` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_sexual_harrassment = $row['no_sexual_harrassment'];
            $no_resolved_sexual_harrassment = $row['no_resolved_sexual_harrassment'];
            
?>
<div class=" w-100 h-auto" id="research573" style="display: block;">
                        <h2 class="text-center pb-4"> Committee on Decorum and Investigation COD</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_sexual_harrassment" value="<?php echo "$no_sexual_harrassment"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_resolved_sexual_harrassment" value="<?php echo "$no_resolved_sexual_harrassment"?>">
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