<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_purchased_GAD = $_POST['no_purchased_GAD'];
    $no_GAD_related_esource = $_POST['no_GAD_related_esource'];
    $total_amount_utilized = $_POST['total_amount_utilized'];
    
    $query = "INSERT INTO `research5.9.4` (ID, no_purchased_GAD , no_GAD_related_esource, total_amount_utilized) VALUES ('$ID', '$no_purchased_GAD', '$no_GAD_related_esource', '$total_amount_utilized')";
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
