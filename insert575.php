<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_filed_VAWC_cases = $_POST['no_filed_VAWC_cases'];
    $no_resolve_VAWC = $_POST['no_resolve_VAWC'];

    $query = "INSERT INTO `research5.7.5` (ID, no_filed_VAWC_cases , no_resolve_VAWC) VALUES ('$ID', '$no_filed_VAWC_cases', '$no_resolve_VAWC`)";
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
