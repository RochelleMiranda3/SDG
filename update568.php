<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_mentoring_femalestudents = $_POST['no_mentoring_femalestudents'];
        $title_ppa1 = $_POST['title_ppa1'];
        $description_ppa = $_POST['description_ppa'];
        $total_cost1 = $_POST['total_cost1'];
        $fund_source1 = $_POST['fund_source1'];
        $no_mentoring_female_employees = $row['no_mentoring_female_employees'];
        $title_ppa2 = $row['title_ppa2'];
        $short_description = $row['short_description'];
        $total_cost2 = $row['total_cost2'];
        $fund_source2 = $row['fund_source2'];
        $total_female_employees = $row['total_female_employees'];
        

        $update_query = "UPDATE `research5.6.8`
        SET no_mentoring_femalestudents = '$no_mentoring_femalestudents', title_ppa1 = '$title_ppa1', description_ppa = '$description_ppa', total_cost1 = '$total_cost1', fund_source1 = '$fund_source1'
        , no_mentoring_female_employees = '$no_mentoring_female_employees', title_ppa2 = '$title_ppa2', short_description = '$short_description', total_cost2 = '$total_cost2', fund_source2 = '$fund_source2', total_female_employees = '$total_female_employees'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.6.8` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_mentoring_femalestudents = $row['no_mentoring_femalestudents'];
            $title_ppa1 = $row['title_ppa1'];
            $description_ppa = $row['description_ppa'];
            $total_cost1 = $row['total_cost1'];
            $fund_source1 = $row['fund_source1'];
            $no_mentoring_female_employees = $row['no_mentoring_female_employees'];
            $title_ppa2 = $row['title_ppa2'];
            $short_description = $row['short_description'];
            $total_cost2 = $row['total_cost2'];
            $fund_source2 = $row['fund_source2'];
            $total_female_employees = $row['total_female_employees'];

?>
<div class=" w-100 h-auto" id="research568" style="display: block;">
                        <h2 class="text-center pb-4">Women’s mentoring schemes</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_mentoring_femalestudents" value="<?php echo "$no_mentoring_femalestudents"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="title_ppa1" value="<?php echo "$title_ppa1"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="description_ppa" value="<?php echo "$description_ppa"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_cost1" value="<?php echo "$total_cost1"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="fund_source1" value="<?php echo "$fund_source1"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_mentoring_female_employees" value="<?php echo "$no_mentoring_female_employees"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="title_ppa2" value="<?php echo "$title_ppa2"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="short_description" value="<?php echo "$short_description"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_cost2" value="<?php echo "$total_cost2"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="fund_source2" value="<?php echo "$fund_source2"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_female_employees" value="<?php echo "$total_female_employees"?>">
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