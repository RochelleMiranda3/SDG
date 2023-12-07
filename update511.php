<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
    $author = $_POST['author'];
    $year_pub = $_POST['year_pub'];
    $no_clinical = $_POST['no_clinical'];

        $update_query = "UPDATE `research5.1.1`
        SET title = '$title', author = '$author', year_pub = '$year_pub', no_clinical = '$no_clinical' 
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.1.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $title = $row['title'];
            $author = $row['author'];
            $year_pub = $row['year_pub'];
            $no_clinical = $row['no_clinical'];
?>
<h2 class="text-center pb-5">Research on gender equality</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the Research" name="title" value="<?php echo "$title" ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author" value="<?php echo "$author" ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub" value="<?php echo "$year_pub" ?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of clinical citations" name="no_clinical" value="<?php echo "$no_clinical" ?>">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update</button>
                            </div>
                        </form>

<?php
        }
    }
}


?>