<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_courses_integrated = $_POST['no_courses_integrated'];
    
    $query = "INSERT INTO `research5.10.1` (ID, no_courses_integrated) VALUES ('$ID', '$no_courses_integrated')";
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
