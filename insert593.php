<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_GAD_IEC = $_POST['no_GAD_IEC'];
    $total_cost = $_POST['total_cost'];
    $no_IEC_materials = $_POST['no_IEC_materials'];
    
    $query = "INSERT INTO `research5.9.3` (ID, no_GAD_IEC , total_cost, no_IEC_materials) VALUES ('$ID', '$no_GAD_IEC', '$total_cost', '$no_IEC_materials`)";
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
