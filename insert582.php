<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $total_GAD_fund_utilized = $_POST['total_GAD_fund_utilized'];
    
    $query = "INSERT INTO `research5.8.2` (ID, total_GAD_fund_utilized) VALUES ('$ID', '$total_GAD_fund_utilized')";
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
