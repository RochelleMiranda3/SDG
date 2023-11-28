<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_sexual_harrassment = $_POST['no_sexual_harrassment'];
    $no_resolved_sexual_harrassment = $_POST['no_resolved_sexual_harrassment'];
  
    $query = "INSERT INTO `research5.7.3` (ID, no_sexual_harrassment , no_resolved_sexual_harrassment) VALUES ('$ID', '$no_sexual_harrassment', '$no_resolved_sexual_harrassment`)";
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
