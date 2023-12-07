<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_encourage_woman = $_POST['no_encourage_woman'];
        $title_ppa = $_POST['title_ppa'];
        $description_ppa = $_POST['description_ppa'];
        $total_cost1 = $_POST['total_cost1'];
        $fund_source1 = $_POST['fund_source1'];
        $categorized = $_POST['categorized'];
        $categorized = $_POST['no_collaboration'];
        $categorized = $_POST['title_description_collab'];
        $categorized = $_POST['total_cost2'];
        $categorized = $_POST['fund_source2'];
        

        $update_query = "UPDATE `research5.3.5`
        SET no_encourage_woman = '$no_encourage_woman', title_ppa = '$title_ppa', description_ppa = '$description_ppa', total_cost1 = '$total_cost1', fund_source1 = '$fund_source1'
        , categorized = '$categorized', no_collaboration = '$no_collaboration', title_description_collab = '$title_description_collab', total_cost2 = '$total_cost2', fund_source2 = '$fund_source2'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.3.5` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_encourage_woman = $row['no_encourage_woman'];
            $title_ppa = $row['title_ppa'];
            $description_ppa = $row['description_ppa'];
            $total_cost1 = $row['total_cost1'];
            $fund_source1 = $row['fund_source1'];
            $categorized = $row['categorized'];
            $no_collaboration = $row['no_collaboration'];
            $title_description_collab = $row['title_description_collab'];
            $total_cost2 = $row['total_cost2'];
            $fund_source2 = $row['fund_source2'];

?>
<div class=" w-100 h-auto" id="research535" style="display: block;">
                        <h2 class="text-center pb-4">Women’s application in underrepresented subjects</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students starting a degree" name="no_encourage_woman" value="<?php echo "$no_encourage_woman"?>">
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
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_cost1" value="<?php echo "$total_cost1"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="fund_source1" value="<?php echo "$fund_source1"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="categorized" value="<?php echo "$categorized"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="no_collaboration" value="<?php echo "$no_collaboration"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="title_description_collab" value="<?php echo "$title_description_collab"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="total_cost2" value="<?php echo "$total_cost2"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="fund_source2" value="<?php echo "$fund_source2"?>">
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