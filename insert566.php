<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_use_childfacility = $_POST['no_use_childfacility'];
  
    $query = "INSERT INTO `research5.6.6` (ID, no_use_childfacility) VALUES ( '$ID', '$no_use_childfacility)";
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
