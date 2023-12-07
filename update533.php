<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_women_applicants = $_POST['no_women_applicants'];
        $no_ppa = $_POST['no_ppa'];
        

        $update_query = "UPDATE `research5.3.3`
        SET no_women_applicants = '$no_women_applicants', no_ppa = '$no_ppa'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.3.3` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_women_applicants = $row['no_women_applicants'];
            $no_ppa = $row['no_ppa'];
            
?>
<div class=" w-100 h-auto" id="research533" style="display: block;">
                        <h2 class="text-center pb-4">Policy for women applications and entry</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_women_applicants" value="<?php echo "$no_women_applicants"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_ppa" value="<?php echo "$no_ppa"?>">
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