<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_staff_faculty = $_POST['no_staff_faculty'];
  
    $query = "INSERT INTO `research5.6.7` (ID, no_staff_faculty ) VALUES ( '$ID', '$no_staff_faculty )";
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
