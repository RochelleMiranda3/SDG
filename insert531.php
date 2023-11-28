<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ID = $_POST['ID'];
    $no_college_applicants = $_POST['no_college_applicants'];
    $no_admitted = $_POST['no_admitted'];
    $no_enrollees = $_POST{'no_enrolles'};

    $query = "INSERT INTO `research5.3.1` (ID, no_college_applicants, no_admitted, no_enrolles) VALUES ('$ID', '$no_college_applicants', '$no_admitted'. '$no_enrolles')";
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
