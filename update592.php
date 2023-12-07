<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_conducted_GAD = $_POST['no_conducted_GAD'];
        $title_ppa = $_POST['title_ppa'];
        $description_ppa = $_POST['description_ppa'];
        $total_cost = $_POST['total_cost'];
        $fund_source = $_POST['fund_source'];
        

        $update_query = "UPDATE `research5.9.2`
        SET no_conducted_GAD = '$no_conducted_GAD', title_ppa = '$title_ppa', description_ppa = '$description_ppa', total_cost = '$total_cost', fund_source = '$fund_source'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.9.2` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_conducted_GAD = $row['no_conducted_GAD'];
            $title_ppa = $row['title_ppa'];
            $description_ppa = $row['description_ppa'];
            $total_cost = $row['total_cost'];
            $fund_source = $row['fund_source'];
            

?>
<div class=" w-100 h-auto" id="research592" style="display: block;">
                        <h2 class="text-center pb-4">GAD Observances</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_conducted_GAD" value="<?php echo "$no_conducted_GAD"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="title_ppa" value="<?php echo "$title_ppa"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="description_ppa" value="<?php echo "$description_ppa"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_cost" value="<?php echo "$total_cost"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="fund_source" value="<?php echo "$fund_source"?>">
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