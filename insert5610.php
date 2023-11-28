<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_reports_discrimination = $_POST['no_reports_discrimination'];
    $no_resolved_discrimination = $_POST['`no_resolved_discrimination'];

    $query = "INSERT INTO `research5.6.1.0` (ID, no_reports_discrimination , no_resolved_discrimination) VALUES ('$ID', '$no_reports_discrimination`, '$no_resolved_discrimination' )";
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
