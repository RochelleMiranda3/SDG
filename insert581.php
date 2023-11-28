<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $total_campus_GAA = $_POST['total_campus_GAA'];
    $total_GAA = $_POST['total_GAA'];
    $total_GAD_fund = $_POST['total_GAD_fund'];
    
    $query = "INSERT INTO `research5.8.1` (ID, total_campus_GAA , total_GAA, total_GAD_fund) VALUES ('$ID', '$total_campus_GAA', '$total_GAA', '$total_GAD_fund`)";
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
