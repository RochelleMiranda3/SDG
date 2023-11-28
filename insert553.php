<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $total_no_STEM = $_POST['total_no_STEM'];
    $no_graduate_medicine = $_POST['no_graduate_medicine'];
    $no_art_humanities = $_POST['no_art_humanities'];

    $query = "INSERT INTO `research5.5.3` (ID, total_no_STEM, no_graduate_medicine, no_art_humanities) VALUES ('$ID', '$total_no_STEM', '$no_graduate_medicine', '$no_art_humanities')";
    $insert = mysqli_query($conn,$query);

    if($insert){
        header("Location:../../../admin/sdg5/formsdg5.php?message=Insert Successful");
    }else if(!$insert){
        die("Query failed. " . mysqli_error($conn));
    }
}
else {
    echo "Invalid request method";
}

?>
